<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(""); ?><?php if(wp_title("", false)) { echo ' |'; } ?> LTSC - TVD al Dia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Slab:100,300,400,700|Slabo+27px" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<header>
			<div class="logo">
				<a href="<?php echo get_option('home'); ?>"/><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
			</div>
			<!--<nav id="navbar1">
				<ul>
					<li><a href="#">Link 1</a></li>
					<li><a href="#">Link 2</a></li>
					<li><a href="#">Link 3</a></li>
					<li><a href="#">Link 4</a></li>
					<li><a href="#">Link 5</a></li>
				</ul>
			</nav>-->
		</header>
	</div>
	<div id="navbar2">
		<div class="container">
			<nav class="menu">
				<?php wp_nav_menu(
				array(
					'container' => false,
					'items_wrap' => '<ul class="nav">%3$s</ul>',
					'theme_location' => 'menu'
				)); ?>
			</nav>
		</div>
	</div>