<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1"><![endif]-->
    <!--[if IE 7]>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie7.css" type="text/css" media="screen" />
    <![endif]-->
    <!--[if IE 6]>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie6.css" type="text/css" media="screen" />
    <![endif]-->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_enqueue_script('jquery'); ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <script src="<?php bloginfo('template_url'); ?>/js/columnizer.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/columnize.js" type="text/javascript"></script>   
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/animatedcollapse.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/collapse.js"></script>
</head>
<body <?php body_class(); ?>>



	<div id="outer">
    	<div id="top">
    	
    	

    	
        	<div id="logo">
      
      <a href="<?php echo home_url( '/' ); ?>"><img src="file:///Macintosh HD/Users/alanoliver/Desktop/Mark.jpg" width="30" height="30" /></a> 
      
      
        	</div>
        </div>
        <div id="menu">
            <div id="navicons">
                <ul>
                    <li><a id="twitter" href="<?php echo get_option('imbalance_twturl'); ?>" target="_blank" title="">Twitter</a></li>
                    <li><a id="facebook" href="<?php echo get_option('imbalance_fbkurl'); ?>" target="_blank" title="">Facebook</a></li>
                </ul>
            </div>
            <div id="cats">
            	<ul>
                	<li><a href="<?php bloginfo("url"); ?>/" title=""<?php if ( is_front_page()) { ?> class="active"<?php } ?>>Home</a></li>
                	<li><a href="#" rel="toggle[categories]" title="">Courses</a></li>
         <li><a href="<?php echo get_permalink(1419); ?>">Information</a></li>
         <li><a href="<?php echo get_permalink(1421); ?>">Directory</a></li>

                </ul>
            </div>
        </div>
        <div id="categories">
            <ul class="mcol2">
				  <?php
                    $data = wp_list_categories('show_count=0&echo=0&title_li=&depth=1&hide_empty=0&orderby=name&exclude=1');
                    $data = preg_replace('/\<\/a\> \((.*)\)/',' <span>$1</span></a>',$data);
                    echo $data;
                  ?>
            </ul>
        </div>
        
