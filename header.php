<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <title><?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>"/>
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/stylesheets/html5reset-1.6.1.css">
  <link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/stylesheets/styles.css">

  <!-- TypeKit -->
  <script type="text/javascript" src="http://use.typekit.com/tbe5ivf.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <script src="<? bloginfo('template_url'); ?>/javascripts/jquery.min.js"></script>
  <script src="<? bloginfo('template_url'); ?>/javascripts/swipe.min.js"></script>
  <script src="<? bloginfo('template_url'); ?>/javascripts/swipe-init.js"></script>
</head>
<body>
<div id="header-bg"></div>
<header>
  <div id="logo" class="page-curl">
    <a href="/?ref=logo">
      <img style="width: 100%;" src="<? bloginfo('template_url') ?>/images/logo/logo-transparent-clipped.png"/>
    </a>
  </div>
  <nav class="mobile">
    <ul>
      <li><a href="#menu">Menu</a></li>
    </ul>
  </nav>
  <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'nav' ) ); ?>
</header>
