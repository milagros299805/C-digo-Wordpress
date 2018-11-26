<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo ('charset'); ?>">
	<title><?php bloginfo ('name'); wp_title('/') ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<meta name="description" content=" <?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
</head>

<body class="body">
		
	<header class="header">

	  		<div class="logo__menu">
			<h1><a href="<?php bloginfo ('url'); ?>"></a><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo ('name') ?>"></h1>

			</div>

			<input class="label__check" type="checkbox" id="btn-menu">
			<label class="label" for="btn-menu"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-03.png" alt=""></label>
			
		<!--<nav class="menu">
				<ul class="navlist">
					<li><a class="list__item" href="#"></span>Inicio</a></li>

					<li><a class="list__item" href="#"><span class="icon-star-empty"></span>Sobre mí</a></li>

					<li><a class="list__item" href="#"><span class="icon-images"></span>Portafolio</a></li>

					<li><a class="list__item" href="#"><span class="icon-quotes-left"></span>Blog</a></li>

					<li><a class="list__item" href="#"><span class="icon-mail"></span>Contáctame</a></li>

				</ul>
			</nav>-->

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'menu') ); ?>
	</header>