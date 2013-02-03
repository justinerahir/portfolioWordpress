<!DOCTYPE html>
<html class="no-js" lang="<?php bloginfo("language");?>">
	<head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
        <meta name="description" content="Bienvenue sur mon portfolio !">
        <meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=1">
        <title><?php blogInfo("name"); ?></title>
        <!--<link rel="stylesheet" type="text/css" href="http://www.justinerahir.be/wordpress/wp-content/themes/monTheme/reset.css">-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
		<link rel="icon" type="image/png" href="http://www.justinerahir.be/wordpress/wp-content/uploads/2013/01/moi2VS.jpg" />
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php wp_head();?>
    </head>
    <body class="span16">
		<header id="top-bar">
			<hgroup>
				<h1>
					<a class="logo" title="Retour vers la page d'accueil" href="http://justinerahir.be"><?php blogInfo("name"); ?></a>
				</h1>
				<h2><?php bloginfo('description'); ?></h2>
			</hgroup>
			<nav>
				<h1 class="none">Menu du portfolio</h1>
				<?php wp_nav_menu('header_menu');?>
			</nav>
		</header>