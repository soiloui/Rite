<?php

/**
 * Header template.
 *
 * @package Rite
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>

<!--
  body_class()
  Add wordpress body classes.
  It's based on location, so could be handy
  to style certain pages
-->

<body <?php body_class('and-another-class'); ?>>

  <!--
  function_exists()
  Important for backward compability

  wp_body_open()
  Thanks to this you can easily hook into
  beginning of body.
-->
  <?php
  if (function_exists('wp_body_open')) {
    wp_body_open();
  }
  ?>

  <div id="page" class="site">
    <div id="content" class="site-content">
      <header id="main-header" class="site-header" role="banner">
        <?php get_template_part('template-parts/header/nav'); ?>

      </header>