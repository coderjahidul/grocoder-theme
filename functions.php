<?php 
   add_action( 'after_setup_theme', 'grocoder_theme_function' );

   function grocoder_theme_function(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
    
   }

?>