<?php 
get_header(); 
?>
	<div class="the-main-front-page">
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