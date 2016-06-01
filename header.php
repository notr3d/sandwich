<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css"/>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,300italic,400italic,700italic&subset=cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site">
	<header class="site-header" role="banner">
		<div class="site-header__wrapper lcw">
			<div class="site-header__item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/site-logo.png" alt="" class="logo">
			</div>
			<div class="site-header__item">
				<a href="mailto:info@novform.ru" class="mail">info@novform.ru</a>
			</div>
			<div class="site-header__item">
				<a href="skype:+74956638687" class="tel">+7 (495) <b>663-86-87</b></a>
			</div>
			<div class="site-header__item">
				<p class="address">
					г. Москва, ул. Авиамоторная<br>
					дом 50, строение 2
				</p>
			</div>
		</div>		
	</header>
	<div class="site-content">
