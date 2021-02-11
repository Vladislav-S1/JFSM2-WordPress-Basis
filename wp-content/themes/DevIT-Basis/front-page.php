<?php 
get_header(); 
?>
	<div class="the-main-front-page">
		<?php
        global $wpdb;
		
update_option( 'my_option', 'whattt' );
include_once( get_stylesheet_directory() .'/classes/mail.php');
		if($wpdb->last_error !== '') :

        $str   = htmlspecialchars( $wpdb->last_result, ENT_QUOTES );
        $query = htmlspecialchars( $wpdb->last_query, ENT_QUOTES );

        print "<div id='error'>
        <p class='wpdberror'><strong>WordPress database error:</strong> [$str]<br />
        <code>$query</code></p>
        </div>";

    endif;
   ?>
		<!-- Start the Loop. -->
		<?php if ( have_posts() ) :the_post(); ?>
			<div id="home-page-base">
				<?php the_content(); ?>
			</div> 
		<?php else : ?>	
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
<?php
get_footer();
?>