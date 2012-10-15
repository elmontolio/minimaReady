<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="author" content="montolio" />
	<meta name="description" content="AGREGAR UNA DESCRIPCIÓN DEL SITIO AQUÍ, EN EL header.php" />
	<meta name="keywords" content="AGREGAR PALABRAS CLAVE SEPARADAS POR UNA COMA AQUÍ" />
	<title><?php bloginfo('name'); wp_title('-'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> rss feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!-- jQuery -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.1.min.js"></script>
    
    <!-- Facebook -->
    	<div id="fb-root"></div>
	<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
        
    
    
    
    
    
	<?php wp_head(); ?>
</head>

<body>

<div id="wrapper">

<div id="header">
	<div id="header_branding">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h3><?php bloginfo('description'); ?></h3>
	</div>
	<div id="header_navigation">
		<ul>
			<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
			<li>Páginas:</li>
			<?php wp_list_pages('title_li='); ?>
            <li>Categorías:</li>
			<?php wp_list_categories('title_li='); ?> 
			<li><a href="<?php bloginfo('rss2_url'); ?>">Feed RSS</a></li>
		</ul>
	</div>
</div>
