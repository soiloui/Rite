<?php

/**
 * Theme functions.
 *
 * @package Rite
 */

function rite_enqueue_scripts()
{
  /**
   * wp_enqueue_style()
   * Arguments:
   * 1. custom name
   * 2. path to file
   * 3. dependency (load after file with that custom name)
   * 4. version of file - allows to prevent caching
   *    when file was changed.
   *    So main.css is loaded after style.css
   * 5. media query - on which devices file should be loaded
   *
   */

  wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));

  /**
   * wp_register_style()
   * Same arguments as above.
   * It allows to wait with loading style.
   */

  wp_register_style('main', get_template_directory_uri() . '/css/main.css', ['stylesheet'], filemtime(get_template_directory() . '/assets/css/main.css'));
  wp_enqueue_style('main');

  /**
   * wp_enqueue_script()
   * Arguments:
   * 1. custom name
   * 2. path to file
   * 3. dependency (load after file with that custom name)
   * 4. version of file - allows to prevent caching
   *    when file was changed.
   *    So main.css is loaded after style.css
   * 5. after footer?
   *
   */

  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);
}

add_action('wp_enqueue_scripts', 'rite_enqueue_scripts');
