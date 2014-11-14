<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
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
            <header>
                <div id="header">
                    <nav>
                        <div id="navmain">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <?php wp_list_pages(array('title_li' => '')); ?>
                            </ul>
                        </div>
                    </nav>

                    
                    <?php
                    if (is_home()) {
                        /*$header_class = "sitehead";*/
                        $header_class = "pagehead";
                        $header_href_open = "";
                        $header_href_close = "";
                    } else {
                        $header_class = "pagehead";
                        $header_href_open = "<a href=" . site_url() . ">";
                        $header_href_close = "</a>";
                    }
                    ?>
                    <h1 class="<?php echo $header_class; ?> "><?php echo $header_href_open; ?><?php bloginfo('name'); ?><?php echo $header_href_close; ?></h1>
                </div>
            </header>

