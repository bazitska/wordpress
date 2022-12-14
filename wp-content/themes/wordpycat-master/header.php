<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php if(is_front_page()){ ?>
			<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
		<?php }else{ ?>
			<title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
		<?php } ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
	</head>
	<header class="contenedor">
		<div style="display:flex;justify-content:space-between;align-items:center;">
			<div class='contenedorLogo'>
				<a href="<?php echo get_site_url(); ?>" title="<?php the_title(); ?>">
					<?php echo pintar_logo(); ?>
				</a>
			</div>
			<nav role="navigation" class="contenedor">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-principal',  'menu_class' => 'nav navbar-nav', 'container' => 'ul' ) ); ?>
			</nav>
		</div>
	</header>
	<body <?php body_class(isset($class) ? $class : ''); ?>>
		<div>
