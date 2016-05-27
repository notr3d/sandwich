<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
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
				<a href="mailto:info@bigmsk" class="mail">info@bigmsk.ru</a>
			</div>
			<div class="site-header__item">
				<a href="skype:+74957893686" class="tel">+7 (495) <b>789-36-86</b></a>
			</div>
			<div class="site-header__item">
				<p class="address">
					105318, г. Москва,<br>
					ул. Ибрагимова, д.31, (офис308)
				</p>
			</div>
		</div>		
	</header>
	<div class="site-content">
