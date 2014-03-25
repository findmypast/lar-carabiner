<?php namespace Weboap\Carabiner;

use Illuminate\Support\ServiceProvider;

class CarabinerServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('weboap/carabiner');
		
	
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->RegisterCarabiner();

		$this->RegisterMinifyCss();
		$this->RegisterJsmin();
		
		$this->RegisterCurl();
		
		$this->RegisterBooting();
		 
		
	}


	
	public function RegisterCarabiner()
	{
		
		$this->app['carabiner'] = $this->app->share(function($app)
			{
			    return new Carabiner(
						 $app['config'],
						 $app['files'],
						 $app['carabiner.curl'],
						 $app['carabiner.minifycss'],
						 $app['carabiner.jsmin'],
						 $app['url']
						 );
			});
		
		
		$this->app->bind('Weboap\Carabiner\CarabinerManager', function($app) {
			return $app['carabiner'];
		    });
		
		
	}
	


	public function RegisterCurl()
	{
	    $this->app['carabiner.curl'] = $this->app->share(function($app)
	    {
		return new \Curl;
	    });
	}
	
	
	public function RegisterMinifyCss()
	{
	    $this->app['carabiner.minifycss'] = $this->app->share(function($app)
	    {
		return new \CssMin;
	    });
	}
	
	public function RegisterJsmin()
	{
	    $this->app['carabiner.jsmin'] = $this->app->share(function($app)
	    {
		return new \JSMin('');
	    });
	}
	
	
	public function RegisterBooting()
	{
		
		 $this->app->booting(function()
				{
				   $loader = \Illuminate\Foundation\AliasLoader::getInstance();
				   $loader->alias('Carabiner', 'Weboap\Carabiner\Facades\Carabiner');
				});
		
		
	}
	
	
	
	
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('carabiner');
	}

}