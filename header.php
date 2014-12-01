<!doctype html>
<html lang="en">
    <head>
    <link href='http://fonts.googleapis.com/css?family=Special+Elite|Merriweather:400,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url');?>">

        <?php wp_head(); ?>
    </head>

    <body lang="en" <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header">
                <div id="header">
                    <nav role="navigation">
                        <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to main content' ); ?>"><?php _e( 'Skip to content' ); ?></a></div>
                        <div id="navmain">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
                        </div>
                    </nav>
                    
                    <!-- Print page header/logo with link, if needed -->
                    <h1 class="pagehead">
                    <?php if ( ! is_home() ) { echo '<a href="' . site_url() . '">'; } ?><?php bloginfo('name'); ?><?php if ( ! is_home() ) { echo '</a>'; } ?>
                    </h1>
                </div>
            </header>


