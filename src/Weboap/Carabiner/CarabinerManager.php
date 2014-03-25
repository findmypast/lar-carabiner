<?php namespace Weboap\Carabiner;


interface CarabinerManager {

  public function config(array $config);
  
  public function js($dev_file, $prod_file = '', $combine = TRUE, $minify = TRUE, $group = 'main');
  
  public function css($dev_file, $media = 'screen', $prod_file = '', $combine = TRUE, $minify = TRUE, $group = 'main');

  public function group($group_name, $assets);
  
  public function display($flag = 'both', $group_filter = NULL);
  
  public function display_string($flag='both', $group_filter = NULL);
  
  public function empty_cache($flag = 'both', $before = 'now');
 
  public function js_string($string = NULL,$group='main');
 
  public function css_string($string = NULL,$group = 'main');
 
 
  

}