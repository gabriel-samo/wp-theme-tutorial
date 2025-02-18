<?php

/*
  ===========================================================================
    Enqueue Tailwind CSS
  ===========================================================================
*/
function brad_enqueue_tailwind() {
  wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/css/tailwind.css');
}

add_action('wp_enqueue_scripts', 'brad_enqueue_tailwind');

?>