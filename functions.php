<?php

// Register Styles and Scripts.
add_action( 'wp_enqueue_scripts', 'assets_handler', 100 );

// Enqueue Styles and Scripts
function assets_handler() {
  if (!is_admin()){    
    // Script
    wp_register_script( 'scripts', get_theme_root_uri().'/DDIVI-Child-Theme/js/scripts.js');
    
    
    // Call Fancybox elements
    wp_enqueue_script( 'scripts' );
  }
}



