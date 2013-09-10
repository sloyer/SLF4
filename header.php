<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
	
		<meta name="viewport" content="width=device-width" />
		<meta charset="utf-8">
		<title><?php bloginfo("name"); ?> <?php wp_title("&bull;"); ?></title>
		
		<!--<meta name="viewport" content="width=device-width">-->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<!--Foundation-->
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/app.css" />
  		<!--Your CSS files-->
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/styles.css" />

		<?php wp_head(); ?>
		
	</head>
	

	<body <?php body_class(); ?>>
	<!--Menu Start-->
	<div class="row">
  		<nav class="large-12 columns">
        <?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>  
      </nav>
    </div>
<!--Menu End-->

	