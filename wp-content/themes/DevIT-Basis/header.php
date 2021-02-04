<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <div id="header">
			<div id="header-container" class="container">
				<div id="logo">
					<?php if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					} ?>
				</div>
				<div id="nav-handle">
					<?php
						wp_nav_menu( array(
						'theme_location' => 'primary'
						) );
					?>						
				</div>
				<div id="menuToggle">
					<input type="checkbox" class="hamburger" />
					<?php
						wp_nav_menu( array(
						'theme_location' => 'mobile'
						) );
					?>						
				</div>
				<div id="login">
					<?php
					
					?>						
				</div>
			</div>
        </div><!-- #header -->
	    <div id="content" class="site-content">
		    <div id="primary" class="content-area">
			    <main id="main" class="site-main" role="main">
