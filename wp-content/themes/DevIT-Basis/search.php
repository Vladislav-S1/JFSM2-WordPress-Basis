get_header();

if ( have_posts() ) {
	?>
	<h1 class="page-title">
		<?php
		printf(
			esc_html__( 'Results for "%s"', 'jfsm2' ),
			'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
		);
		?>
	</h1>
	<div class="search-result">
		<?php
		printf(
			esc_html(
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'jfsm2'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div><!-- .search-result -->
	<?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();
	} // End the loop.
	// Previous/next page navigation.
	jfsm2_the_posts_navigation();
} else {
	<p class="no-search-results"><?php esc_html_e( 'Have not search results.', 'jfsm2' ); ?></p>
}

get_footer();
