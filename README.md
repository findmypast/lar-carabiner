laravel4-carabiner
==============

A port of CI Carabiner Asset Management by @tonydewan for Laravel 4.


### Installation


The recommended way to install Carabiner is through composer.

## Step 1

Just add to  `composer.json` file:

``` json
{
    "require": {
        "weboap/carabiner": "dev-master"
    }
}
```

then run 
``` php
php composer.phar update
```

## Step 2

Add
``` php
'Weboap\Carabiner\CarabinerServiceProvider'
``` 

to the list of service providers in app/config/app.php

## Step 3 

Run

``` php
php artisan config:publish weboap/carabiner
``` 

to publish carabiner config to

``` php
app/config/packages/weboap/carabiner
``` 

then visit the config file that you just published to tune.



###  Usage

For usage follow the original post and wiki page as follow
per original post @ http://ellislab.com/forums/viewthread/117966/
or https://github.com/EllisLab/CodeIgniter/wiki/Carabiner.

To configure Carabiner using the config() method, do this:

``` php
$carabiner_config = array(
    'script_dir' => 'assets/scripts/', 
    'style_dir'  => 'assets/styles/',
    'cache_dir'  => 'assets/cache/',
    'base_uri'   => $base,
    'combine'    => TRUE,
    'dev'        => FALSE
);
        
Carabiner::config($carabiner_config);

```

Add assets like so:

``` php
// add a js file
Carabiner::js('scripts.js');
    
// add a css file
Carabiner::css('reset.css');
    
// add a css file with a mediatype
Carabiner::css('admin/print.css','print');


// groups...

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



//To display a group, pass the group name to the display function:
// display group
Carabiner::display('jquery'); // group name defined as jQuery  

``` 

### Credits

All Credits to original developers I mainly adapted the script for Laravel.
Thanks also to :
Joe Scylla : http://code.google.com/p/cssmin/   : "natxet/CssMin"
linkorb.com/engineering.   : https://github.com/linkorb/jsmin-php    : "linkorb/jsmin-php"
@shuber https://github.com/hamstar/curl
 



