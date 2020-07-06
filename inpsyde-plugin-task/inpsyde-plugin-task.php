<?php
/**
* @package inpsyde-plugin-task
*/
/*
Plugin Name: inpsyde-plugin-task
Description: this is my first attempt at writing the inpsyde task plugin
Version: 1.0.0
Author: Ayham Taweel
License: GPLv2 or later
Text Domain: Ayham-plugin-task
*/
/**
 * check license at link below
 * https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 * 
 */
/**
 * Http caching
 * @var date
 * @var time
 */
//get the last-modified-date of this very file
$lastModified=filemtime(__FILE__);
//get a unique hash of this file (etag)
$etagFile = md5_file(__FILE__);
//get the HTTP_IF_MODIFIED_SINCE header if set
$ifModifiedSince=(isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false);
//get the HTTP_IF_NONE_MATCH header if set (etag: unique file hash)
$etagHeader=(isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);

//set last-modified header
header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastModified)." GMT");
//set etag-header
header("Etag: $etagFile");
//make sure caching is turned on
header('Cache-Control: public');

//check if page has changed. If not, send 304 and exit
if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])==$lastModified || $etagHeader == $etagFile)
{
       header("HTTP/1.1 304 Not Modified");
       exit;
}



//if you want to use the plugin outside wordpress comment the next line
 defined( 'ABSPATH' ) or die('how could you try to steal ma plugin');


if(file_exists( dirname(__FILE__). '/vendor/autoload.php')){
    require_once dirname(__FILE__) .'/vendor/autoload.php';
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;
use Inc\Base\Enqueue;
/*========================*/
class TaskPlugin 
{
 public $name;

    function enqueue(){
        Enqueue::enqueue();
    }


    

 function __construct() {
        $this->name = plugin_basename( __FILE__ );
    }

 function activate(){
    Activate::activate();

 }

 function deactivate(){
     Deactivate::deactivate();
 }

 

 public function settings_link($link){
    $settings_link = '<a href="admin.php?page=inpsyde_task_plugin">database</a>';
  array_push($link, $settings_link);
  return $link;

}

 public function admin_index(){
  require_once plugin_dir_path( __FILE__ ) . 'templates/http_res.php';

}


 public function add_admin_page(){
     add_menu_page( 'database', 'inpsyde-task-plugin', 'manage_options', 'inpsyde_task_plugin',  array($this ,'admin_index'   ),'dashicons-plugins-checked' ,110 );
 }

  
 function register(){
   
	
	

    add_action( 'admin_menu', array($this, 'add_admin_page') );

    add_filter( "plugin_action_links_$this->name" , array($this , 'settings_link'));
 }

}
/*=========================*/
//tests if the class exists so that you can name the class instance
if( class_exists('TaskPlugin')){
$taskPlugin = new TaskPlugin();
$taskPlugin->register();
}


// activation 
register_activation_hook( __FILE__ , array( $taskPlugin , 'activate'));

//deactivation
register_deactivation_hook( __FILE__ , array( $taskPlugin , 'deactivate'));







	





?>