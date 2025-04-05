<?php

function asdrubal_styles_and_scripts()
{
  wp_enqueue_style('main-styles', get_theme_file_uri('/assets/main-styles.css'), [], '1.0.0');

  wp_enqueue_script('change-title', get_template_directory_uri() . '/scripts/script.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'asdrubal_styles_and_scripts');
