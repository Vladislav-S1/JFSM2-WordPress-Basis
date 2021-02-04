<?php 
get_header(); 
var_dump('sfhkshfuis');
?>
	<div class="the-main-front-page  container-fluid" id="first-content-block">
		<!-- Start the Loop. -->
		<?php if ( have_posts() ) :the_post(); ?>
			<div class="post">
				<div class="entry container-fluid" style="padding: 0px;">
					<?php the_content(); ?>
				</div>
			</div> 
		<?php else : ?>	
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
<?php
get_footer();
?>