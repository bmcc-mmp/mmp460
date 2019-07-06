<!doctype html>
<html>
  <head lang="en">
    <meta charset="utf-8">
	<title><?php bloginfo('name');?> | <?php bloginfo('description')?></title>
  
  <!-- linking to the theme stylesheet file -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

<!-- required to identify the head element for plugin use -->
 <?php wp_head(); ?>
  
  </head>
  <body>
    <div id="wrapper">
      <header>
      <!-- Displays the title of the site the way it is set in the Settings and links to the homepage-->
			<h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      
      <!-- Displays the tagline of the site the way it is set in the Settings -->
			<h2><?php bloginfo( 'description' ); ?></h2>
      </header>
      
<!-- Main menu  -->
  
    <!-- Displays the menu that is set in Appearance > Menus -->
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
