get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>
	<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
	<?php if ( $description ) : ?>
		<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
	<?php endif; ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
	<?php endwhile; ?>

	<?php jfsm2_the_posts_navigation(); ?>

<?php else : ?>
	<p class="no-content"><?php esc_html_e( 'Have not content.', 'jfsm2' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>