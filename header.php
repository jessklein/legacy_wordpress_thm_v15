<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

<script src="http://www.wowhead.com/widgets/power.js"></script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("UA-4711643-1");
pageTracker._trackPageview();
} catch(err) {}
</script>
<script src="http://www.thehuntersmark.net/flowplayer/example/flowplayer-3.1.4.min.js"></script>
<?php wp_head(); ?>

</head>

<body>
<div id="header">
	<div id="logos">
		<div id="subscriptions"><a href="http://feeds.feedburner.com/TheHuntersMark">RSS</a> | <a href="http://www.twitter.com/thehuntersmark">Twitter</a> | <a href="http://www.facebook.com/thehuntersmark">Facebook</a> | <a href="http://forums.thehuntersmark.net/">Forums</a> | <a href="http://forums.thehuntersmark.net/blog/">User Blogs</a></div>
		<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="The Hunter's Mark" align="left" /></a> <a href="http://www.doghousesystems.com/"><img src="<?php bloginfo('template_directory'); ?>/images/dhsbanner.jpg" alt="DogHouse Systems: Time to Level Up!" align="right" /></a>
		 
		 <!-- Begin Nav -->
<div id="nav-wrap" class="clearfloat"><div style="float: left;"><?php if (function_exists('pixopoint_menu')) {pixopoint_menu();} ?></div><div style="float: right;"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div></div>
		 <!-- End Nav -->
   <!-- Begin Wrapper -->
</div></div><div id="wrapper">        