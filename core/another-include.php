<?php 

function another_adds(){

    // CSS
        wp_enqueue_style('another-main-style', plugins_url().'/another/css/main.css');
 
    
}

add_action('wp_enqueue_scripts','another_adds');
function another_footer() {
       // JS
       wp_enqueue_script( 'another-main-script',  plugins_url().'/another/js/main.js' );
}

add_action( 'get_footer', 'another_footer' );