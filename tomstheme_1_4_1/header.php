<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://use.typekit.net/aii2bfb.css"><!-- Typekit font link -->
    <?php wp_head(); ?>

  </head>
  <body>
    <div class="container">
      <header class="bottom-line">

        <!-- Masthead -->
        <h1 id="masthead"><a href="#"><?php bloginfo('name'); ?></a></h1>

        <!-- Primary Navigation Menu -->
        <nav id="primary-nav" class="is-hidden">

          <?php
          $args = array(
            'theme_location' => 'primary',
          ); ?>
          <?php wp_nav_menu( $args); ?>

        </nav>

      </header>
