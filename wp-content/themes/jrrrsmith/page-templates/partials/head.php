<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico?v=2" />
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" >
  <title><?php bloginfo('title'); ?></title>
  <link href='https://fonts.googleapis.com/css?family=Work+Sans:100,400,300|Playfair+Display:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/style.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>
