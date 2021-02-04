					?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- #content -->
		<div id="footer">
			<div id="footer-container" class="container">
				<div class="footer-right-right order-sm-2 order-md-3 col-12 col-sm-6 col-md-4">
					<div class="footer-pages"><?php echo __( 'Pages', 'towerview' ) ?></div>
					<div class="wsite-footer-elements" id="footer-nav-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer'
							) );
						?>
					</div>
				</div>
				<div id="footer-base">
					<div class="footer-left-left order-sm-1 order-md-1 col-12 col-sm-6 col-md-4">
						<div class="footer-contacts"><?php echo __( 'Contact', 'towerview' ) ?></div>
						<div class="wsite-footer-elements" id="footer-contacts">
							<?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
								<div id="footer-sidebar">
									<?php dynamic_sidebar( 'footer-sidebar' ); ?>
								</div><!--.footer-sidebar-->
							<?php } ?>
						</div>
					</div>
					<div class="footer-center-center order-sm-3 order-md-2 col-12 col-md-4">
						<div class="footer-center">
							<div class="logo-footer">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.png">
							</div>
							<div class="wsite-footer-elements" id="footer-social-logo">
								<?php if ( is_active_sidebar( 'footer-sidebar2' ) ) { ?>
									<div id="footer-sidebar2">
										<?php dynamic_sidebar( 'footer-sidebar2' ); ?>
									</div><!--.footer-sidebar-->
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="footer-left-left order-sm-1 order-md-1 col-12 col-sm-6 col-md-4">
						<div class="footer-contacts"><?php echo __( 'Contact', 'towerview' ) ?></div>
						<div class="wsite-footer-elements" id="footer-contacts">
							<?php if ( is_active_sidebar( 'footer-sidebar3' ) ) { ?>
								<div id="footer-sidebar">
									<?php dynamic_sidebar( 'footer-sidebar3' ); ?>
								</div><!--.footer-sidebar-->
							<?php } ?>
						</div>
					</div>
				</div>
			</div><!-- #footer-base -->
			<div class="footer-right-right order-sm-2 order-md-3 col-12 col-sm-6 col-md-4">
				<div class="footer-pages"><?php echo __( 'Terms', 'towerview' ) ?></div>
				<div class="wsite-footer-elements" id="footer-nav-menu">
					<?php
						
					?>
				</div>
			</div>
		</div><!-- #footer -->
	</div><!-- #page -->
	<?php wp_footer(); ?>
	</body>
</html>
