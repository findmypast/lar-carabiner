laravel4-carabiner
==============

A port of CI Carabiner Asset Management by @tonydewan for laravel 4


### Installation


The recommended way to install Carabiner  is through composer.

## Step 1

Just add to  `composer.json` file:

``` json
{
    "require": {
        "weboap/carabiner": "dev-master"
    }
}
```

then run php composer.phar update


## Step 2

Add 'Weboap\Carabiner\CarabinerServiceProvider' to the list of service providers in app/config/app.php

## Step 3 
run     php artisan config:publish weboap/carabiner

to publish carabiner config to app/config/packages/weboap/carabiner

visit the config file that you just published to tune



###  Usage

for usage follow the original post and wiki page as follow
per original post @ http://ellislab.com/forums/viewthread/117966/
or https://github.com/EllisLab/CodeIgniter/wiki/Carabiner

to configure carabiner in runtime
you can use

o configure Carabiner using the config() method, do this:

$carabiner_config = array(
    'script_dir' => 'assets/scripts/', 
    'style_dir'  => 'assets/styles/',
    'cache_dir'  => 'assets/cache/',
    'base_uri'   => $base,
    'combine'    => TRUE,
    'dev'        => FALSE
);
        
Carabiner::config($carabiner_config);



Add assets like so:

// add a js file
Carabiner::js('scripts.js');
    
// add a css file
Carabiner::css('reset.css');
    
// add a css file with a mediatype
Carabiner::css('admin/print.css','print');


groups...

 // Define JS
$js = array(
    array('prototype.js'),
    array('scriptaculous.js')
);

// create group
Carabiner::group('prototaculous', array('js'=>$js) );

// an IE only group
$css = array('iefix.css');
$js = array('iefix.js');

Carabiner::group('iefix', array('js'=>$js, 'css'=>$js) );
        
// you can even assign an asset to a group individually 
// by passing the group name to the last parameter of the css/js functions

Carabiner::css('spec.css', 'screen', 'spec-min.css', TRUE, FALSE, 'spec');



To display a group, pass the group name to the display function:
// display group
Carabiner::display('jquery'); // group name defined as jquery  



### Credits

All to original developpers i mainly adapted the script for laravel.


