<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php blogInfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <h1 id="main-title"><?php the_title() ?></h1>
    <button id="change-title">👋</button>
  </header>
