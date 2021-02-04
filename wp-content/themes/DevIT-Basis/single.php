<?php
get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	if ( is_attachment() ) {
		the_post_navigation(
			array(
				/* translators: %s: parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
			)
		);
	}
endwhile; // End of the loop.
get_footer();?>