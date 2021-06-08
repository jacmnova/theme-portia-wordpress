<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9290f66e82.js" crossorigin="anonymous"></script>

    <link href="<?php echo get_template_directory_uri() ?>/assets/css/scroll.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri() ?>/assets/css/nav-bar.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
     <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>

 
 