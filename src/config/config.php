<?php  

return array(
    
    
  'base'   => URL::to('/').'/',  
    
  'charset' => 'UTF-8',
  
/**
* Carabiner 1.45 configuration file.
*/

/*
|--------------------------------------------------------------------------
| Script Directory
|--------------------------------------------------------------------------
|
| Path to the script directory.
| Relative to the public-Folder
|
*/

'scriptDir' => '/js/',



/*
|--------------------------------------------------------------------------
| Style Directory
|--------------------------------------------------------------------------
|
| Path to the style directory.
| Relative to the public-Folder
|
*/

'styleDir' => '/css/',

/*
|--------------------------------------------------------------------------
| Cache Directory
|--------------------------------------------------------------------------
|
| Path to the cache directory. Must be writable.
| Relative to the public-Folder
|
*/

'cacheDir' => '/cache/',




/*
* The following config values are not required.  See Libraries/Carabiner.php
* for more information.
*/


/*
|--------------------------------------------------------------------------
| Development Flag
|--------------------------------------------------------------------------
|
|  Flags whether your in a development environment or not. Defaults to FALSE.
|
*/

'dev' => FALSE,


/*
|--------------------------------------------------------------------------
| Combine
|--------------------------------------------------------------------------
|
| Flags whether files should be combined. Defaults to TRUE.
|
*/

'combine' => false,


/*
|--------------------------------------------------------------------------
| Minify Javascript
|--------------------------------------------------------------------------
|
| Global flag for whether JS should be minified. Defaults to TRUE.
|
*/

'minify_js' => TRUE,


/*
|--------------------------------------------------------------------------
| Minify CSS
|--------------------------------------------------------------------------
|
| Global flag for whether CSS should be minified. Defaults to TRUE.
|
*/

'minify_css' => TRUE,

/*
|--------------------------------------------------------------------------
| Force cURL
|--------------------------------------------------------------------------
|
| Global flag for whether to force the use of cURL instead of file_get_contents()
| Defaults to FALSE.
|
*/

'force_curl' => TRUE,


/*
|--------------------------------------------------------------------------
| Predifined Asset Groups
|--------------------------------------------------------------------------
|
| Any groups defined here will automatically be included.  Of course, they
| won't be displayed unless you explicity display them ( like this: $this->carabiner->display('jquery') )
| See docs for more.
|
*/

'groups' =>
        array(
            'query' => array(

                            'js' => array(
    
                            array('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', TRUE, FALSE)
                            
                                        )
                        ),
            'jqueryui'=> array(

                            'js' => array(

                            array('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', TRUE, FALSE),
                            array('http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js', TRUE, FALSE)

                                        )
                            ),
            'chrome-frame' =>  array(

                                'js' => array(

                                array('http://ajax.googleapis.com/ajax/libs/ext-core/3.0.0/ext-core-debug.js', 'http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js', TRUE, FALSE)

                                            )
                                    ),
            
    ),


);