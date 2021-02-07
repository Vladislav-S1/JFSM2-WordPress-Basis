				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- #content -->
		<div id="footer">
			<div id="footer-container" class="container">
				<div class="footer-top-menu">
					<div id="footer-nav-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer'
							) );
						?>
					</div>
				</div>
			</div>
			<hr size="2" color="#ffffff" />
			<div class="container">
				<div id="footer-base" class="row">
					<div class="footer-base-left">
						<div class="wsite-footer-middle">
							<?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
								<div id="footer-sidebar">
									<?php dynamic_sidebar( 'footer-sidebar' ); ?>
								</div><!--#footer-sidebar-->
							<?php } ?>
						</div>
					</div>
					<div class="footer-base-center">
						<div class="wsite-footer-middle">
							<?php if ( is_active_sidebar( 'footer-sidebar2' ) ) { ?>
								<div id="footer-sidebar2">
									<?php dynamic_sidebar( 'footer-sidebar2' ); ?>
								</div><!--#footer-sidebar2-->
							<?php } ?>
						</div>
					</div>
					<div class="footer-base-right">
						<div class="wsite-footer-middle">
							<?php if ( is_active_sidebar( 'footer-sidebar3' ) ) { ?>
								<div id="footer-sidebar3">
									<?php dynamic_sidebar( 'footer-sidebar3' ); ?>
								</div><!--#footer-sidebar3-->
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<hr size="2" color="#ffffff" />
			<div class="footer-bottom container">
				<div id="footer-terms"><?php  echo __( 'Terms of Service', 'towerview' ) ?></div>
					<?php
						
					?>
				</div>
			</div>
		</div><!-- #footer -->
	</div><!-- #page -->
	<?php wp_footer(); ?>
	</body>
</html>
