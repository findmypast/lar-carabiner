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
		
		include __DIR__.'/../../routes.php';
		
		// // Autoload other libs.
		//\ClassLoader::addDirectories(array(
		//	'/helpers'
		//));
	
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->RegisterCarabiner();
		
		$this->RegisterFile();
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
						 $app['log'],
						 $app['file'],
						 $app['curl'],
						 $app['minifycss'],
						 $app['jsmin']
						 );
			});
		
		
	}
	
	

	public function RegisterFile()
	{
	    $this->app['file'] = $this->app->share(function($app)
	    {
		return new File;
	    });
	}
	

	public function RegisterCurl()
	{
	    $this->app['curl'] = $this->app->share(function($app)
	    {
		return new Curl;
	    });
	}
	
	
	public function RegisterMinifyCss()
	{
	    $this->app['minifycss'] = $this->app->share(function($app)
	    {
		return new Minifycss;
	    });
	}
	
	public function RegisterJsmin()
	{
	    $this->app['jsmin'] = $this->app->share(function($app)
	    {
		return new Jsmin;
	    });
	}
	
	
	public function RegisterBooting()
	{
		
		 $this->app->booting(function()
				{
				   $loader = \Illuminate\Foundation\AliasLoader::getInstance();
				   $loader->alias('Carabiner', 'Weboap\Carabiner\Facades\Carabiner');
				   $loader->alias('File', 'Weboap\Carabiner\Facades\File');
				   $loader->alias('Curl', 'Weboap\Carabiner\Facades\Curl');
				   $loader->alias('Minifycss', 'Weboap\Carabiner\Facades\Minifycss');
				   $loader->alias('Jsmin', 'Weboap\Carabiner\Facades\Jsmin');
				});
		
		
	}
	
	
	
	
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('carabiner', 'file', 'curl', 'minifycss');
	}

}