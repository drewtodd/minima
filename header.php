<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title></title>
            <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url');?>">
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
        
        <?php wp_head(); ?>
    </head>

    <body lang="en">
        <div id="page">
            <div id="header">
                <div id="navmain">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Archive</a></li>
                    </ul>
                </div>
                <h1 class="sitehead"><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>

