<?php

/*
  Plugin Name: Transfert de fichiers
  Plugin URI: 
  description: Simple plugin de transfert de fichiers
  Author: Lycan
  Version: 1.0.0
  Author URI: 
*/

// Add menu
function customplugin_menu() {

    add_menu_page("Menu Plugin", "Réglages Plugin","manage_options", "myplugin", "uploadfile",plugins_url('/customplugin/img/icon.png'));
   
  }
  
  add_action("admin_menu", "customplugin_menu");

function uploadfile() {
    include "uploadfile.php";
}

// function shortcode_download() {
//   include "uploadfile.php";
// }
// add_shortcode('download', 'shortcode_download');
