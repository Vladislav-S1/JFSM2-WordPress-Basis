				<div class="footer">
					<div class="wsite-section wsite-body-section wsite-section-bg-color wsite-background-8 wsite-custom-background" style="background-color: #F9F9F9; background-image: none;" >
						<div class="wsite-section-content">
							<div class="footer-main container">
								<div class="footer row">
									<div class="footer-left-left order-sm-1 order-md-1 col-12 col-sm-6 col-md-4">
										<div class="footer-contacts"><?php echo __( 'Contact', 'jfsm2' ) ?></div>
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
												<?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
													<div id="footer-sidebar2">
														<?php dynamic_sidebar( 'footer-sidebar2' ); ?>
													</div><!--.footer-sidebar-->
												<?php } ?>
											</div>
										</div>
									</div>
									<div class="footer-right-right order-sm-2 order-md-3 col-12 col-sm-6 col-md-4">
										<div class="footer-pages"><?php echo __( 'Pages', 'jfsm2' ) ?></div>
										<div class="wsite-footer-elements" id="footer-nav-menu">
											<?php
												wp_nav_menu( array(
												'theme_location' => 'second'
												) );
											?>
										</div>
									</div>
								</div>
							</div>
							<div class="container" id="footer-line">
								<div class="wsite-footer-elements">
									<hr class="styled-hr" style="width:100%;" />
								</div>
							</div>
							<div class="footer-all-rights-reserved container">
								jfsm2 | All Rights Reserved
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
	</body>
</html>
