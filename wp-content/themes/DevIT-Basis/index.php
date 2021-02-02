<?php 
get_header(); 
?>
	<div class="the-page  container" id="first-content-block" style="margin-top: 50px;">
		<?php
		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) { 
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}
		 
		$custom_query_args = array(
			'post_type' => 'post', 
			'posts_per_page' => 6,
			'paged' => $paged,
			'post_status' => 'publish',
			'ignore_sticky_posts' => true,
			'orderby' => 'date'
		);
		$custom_query = new WP_Query( $custom_query_args );
		?>
		<div class="row"> <?php
		if ( $custom_query->have_posts() ) :
			while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
		 		<div class="news-block-little col-12 col-sm-6 col-lg-4">
					<article <?php post_class(); ?>>
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'medium' ); if ( false == $url ) {$url = get_stylesheet_directory_uri().'/images/BG-front-page.jpg';} ?>
						 	<a class="post-news-featured-img" href="<?php the_permalink(); ?>">
						 		<img src="<? echo $url ?>">
						 	</a>
						<div class="post-news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div> 
						<div class="post-news-except"><?php the_excerpt(); ?></div>
						<div class="post-date"><?php the_time('F j, Y') ?></div>
					</article>
		 		</div>
			<?php
			endwhile;
			?>
		 </div>
			<?php if ($custom_query->max_num_pages > 1) : ?>
				<?php
				$orig_query = $wp_query;
				$wp_query = $custom_query;
				?>
				<nav class="prev-next-posts">
					<div class="button-learn-more-2" id="older-news">
						<?php echo get_next_posts_link( 'Older News', $custom_query->max_num_pages ); ?>
					</div>
					<div class="button-learn-more-4" id="newer-news">
						<?php echo get_previous_posts_link( 'Newer News' ); ?>
					</div>
				</nav>
				<?php
				$wp_query = $orig_query;
				?>
			<?php endif; ?>
		 
		<?php
			wp_reset_postdata();
		else:
			echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
		endif; ?>
	</div>
<?php
get_footer();
?>