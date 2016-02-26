<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="utf-8">

        <link rel="apple-touch-icon" sizes="57x57" href="/code/favi/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/code/favi/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/code/favi/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/code/favi/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/code/favi/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/code/favi/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/code/favi/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/code/favi/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/code/favi/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/code/favi/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/code/favi/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="/code/favi/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/code/favi/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/code/favi/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/code/favi/manifest.json">
<link rel="mask-icon" href="/code/favi/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/code/favi/favicon.ico">
<meta name="apple-mobile-web-app-title" content="Code++">
<meta name="application-name" content="Code++">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/code/favi/mstile-144x144.png">
<meta name="msapplication-config" content="/code/favi/browserconfig.xml">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <meta name="mobile-web-app-capable" content="yes">
   <meta name="apple-mobile-web-app-capable" content="yes">
<meta name="theme-color" content="#179cde">


        <title><?php echo page_title('Page can’t be found'); ?> — <?php echo site_name(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo site_description(); ?>">
        
        <link href="<?php echo theme_url('/css/bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo theme_url('/css/app.css'); ?>" rel="stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

	      <?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		    <?php endif; ?>
	
        <?php if (($color = article_custom_field('link_color')) || ($color = page_custom_field('link_color'))): ?>
        <style>
        .bs-docs-nav .navbar-brand,
        .bs-docs-nav .navbar-nav > li > a {
            font-weight: 500;
            color: <?php echo $color; ?>;
        }
        .bs-docs-nav .navbar-nav > li > a:hover,
        .bs-docs-nav .navbar-nav > .active > a,
        .bs-docs-nav .navbar-nav > .active > a:hover {
            color: <?php echo $color; ?>;
        }
        footer a{
            color:<?php echo $color; ?>;
        }
        
        footer a:hover{
	        color:<?php echo $color; ?>;
        }   
        </style>
        <?php endif; ?>
    </head>
    <body>

        <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                 
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="/code">
                    <img alt="Brand" style="max-width:50px; margin-top: -7px;" src="/code/favi/brandicon.jpg">
                  </a>
                    <a href="/code" class="navbar-brand"><?php echo site_name(); ?></a>
    
                </div>
    
              <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
              <?php if(has_menu_items()): ?>
                <ul class="nav navbar-nav">
                  <?php while(menu_items()): ?>
                    <li <?php echo (menu_active() ? 'class=""' : ''); ?>>
                      <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
              </nav>
            </div>
        </header>