<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
  <!-- media-queries.js (fallback) -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
<!-- html5.js>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<!-- IE CSS>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/dumbo.css">
<!-- [endif]-->
  <script type="text/javascript" src="//use.typekit.net/rtw2xve.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
