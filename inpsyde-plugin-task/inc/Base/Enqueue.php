<?php
/**
 * @package inpsyde_plugin_task
 * 
 */

 namespace Inc\Base;

 class Enqueue 
 {
   
    public function register(){
        add_action( 'admin_enqueue_scripts',  $arr = array( $this , 'enqueue' ) );

    }
    function enqueue(){
        wp_enqueue_style( 'taskplugincss', plugins_url( '/assets/taskplugincss.css' , __FILE__ )  );
        
    }

}