<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width">
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
				<div class="row">
					<div id="menuToggle" class="col-4">
						<input type="checkbox" class="hamburger"/>
						<span></span>
						<span></span>
						<span></span>
						<?php
							wp_nav_menu( array(
							'theme_location' => 'mobile'
							) );
						?>						
					</div>
					<div id="logo" class="col-lg-2 order-lg-1 col-md-6 order-md-1 col-4">
						<?php if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						} ?>
					</div>
					<div id="nav-handle" class="col-lg-8 order-lg-2 col-md-12 order-md-3">
						<?php
							wp_nav_menu( array(
							'theme_location' => 'primary'
							) );
						?>						
					</div>
					<div id="login" class="col-lg-2 order-lg-3 col-md-6 order-md-2 col-4"><?php
						if ( ! is_user_logged_in() ) {
							$link = '<a id="login-button-in" href="' . esc_url( wp_login_url( '' ) ) . '">' . __( 'Authorization' ) . '</a>';
						} else {
							$link = '<a id="login-button-out" href="' . esc_url( wp_logout_url( '' ) ) . '">' . __( 'Log out' ) . '</a>';
						} echo $link; ?>						
					</div>
					
				</div>
			</div>
        </div><!-- #header -->
	    <div id="content" class="site-content">
		    <div id="primary" class="content-area">
			    <main id="main" class="site-main" role="main">
