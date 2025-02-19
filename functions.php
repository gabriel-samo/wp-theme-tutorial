<?php

/*
  ===========================================================================
    Enqueue Scripts and Styles
  ===========================================================================
*/
function brad_scripts_and_styles() {
  // Enqueue Tailwind CSS
  wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/css/tailwind.css');
}

add_action('wp_enqueue_scripts', 'brad_scripts_and_styles');

?>