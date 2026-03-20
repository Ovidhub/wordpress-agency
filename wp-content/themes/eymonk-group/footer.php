<?php
/**
 * Footer template
 *
 * @package eymonk-group
 */
?>

<!-- ===== FOOTER ===== -->
<footer class="eymonk-footer" role="contentinfo">

	<div class="eymonk-container">
		<div class="eymonk-footer__main">

			<!-- Brand column -->
			<div class="eymonk-footer__brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="eymonk-logo" aria-label="<?php bloginfo( 'name' ); ?> — <?php esc_attr_e( 'Home', 'eymonk-group' ); ?>">
					<div class="eymonk-logo__mark" aria-hidden="true">EG</div>
					<div class="eymonk-logo__text">
						<span class="eymonk-logo__name">EYMONK GROUP</span>
						<span class="eymonk-logo__tagline">Print · Design · Digital</span>
					</div>
				</a>
				<p class="eymonk-footer__desc">
					<?php esc_html_e( 'Professional printing, website design and digital marketing for UK small and medium businesses. Everything you need to grow — under one roof.', 'eymonk-group' ); ?>
				</p>
				<!-- Social -->
				<div class="eymonk-footer__social">
					<?php if ( eymonk_get( 'eymonk_facebook' ) ) : ?>
						<a href="<?php eymonk_e( 'eymonk_facebook' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Facebook', 'eymonk-group' ); ?>">f</a>
					<?php endif; ?>
					<?php if ( eymonk_get( 'eymonk_instagram' ) ) : ?>
						<a href="<?php eymonk_e( 'eymonk_instagram' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Instagram', 'eymonk-group' ); ?>">ig</a>
					<?php endif; ?>
					<?php if ( eymonk_get( 'eymonk_linkedin' ) ) : ?>
						<a href="<?php eymonk_e( 'eymonk_linkedin' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'LinkedIn', 'eymonk-group' ); ?>">in</a>
					<?php endif; ?>
					<?php if ( eymonk_get( 'eymonk_twitter' ) ) : ?>
						<a href="<?php eymonk_e( 'eymonk_twitter' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'X (Twitter)', 'eymonk-group' ); ?>">𝕏</a>
					<?php endif; ?>
				</div>
			</div>

			<!-- Services column -->
			<div class="eymonk-footer__col">
				<h4><?php esc_html_e( 'Services', 'eymonk-group' ); ?></h4>
				<ul class="eymonk-footer__links" role="list">
					<li><a href="<?php echo esc_url( home_url( '/printing-services/' ) ); ?>">🖨️ <?php esc_html_e( 'Printing Services', 'eymonk-group' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/website-design/' ) ); ?>">💻 <?php esc_html_e( 'Website Design', 'eymonk-group' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/digital-marketing/' ) ); ?>">📈 <?php esc_html_e( 'Digital Marketing', 'eymonk-group' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">🛒 <?php esc_html_e( 'Print Shop', 'eymonk-group' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>">📋 <?php esc_html_e( 'Get a Quote', 'eymonk-group' ); ?></a></li>
				</ul>
			</div>

			<!-- Company column -->
			<div class="eymonk-footer__col">
				<h4><?php esc_html_e( 'Company', 'eymonk-group' ); ?></h4>
				<ul class="eymonk-footer__links" role="list">
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About Us', 'eymonk-group' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog', 'eymonk-group' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'eymonk-group' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>"><?php esc_html_e( 'Careers', 'eymonk-group' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/partners/' ) ); ?>"><?php esc_html_e( 'Partners', 'eymonk-group' ); ?></a></li>
				</ul>
			</div>

			<!-- Contact column -->
			<div class="eymonk-footer__col">
				<h4><?php esc_html_e( 'Get in Touch', 'eymonk-group' ); ?></h4>
				<div class="eymonk-footer__contact">
					<div class="eymonk-footer__contact-item">
						<span class="icon" aria-hidden="true">📞</span>
						<span><?php eymonk_phone_link(); ?></span>
					</div>
					<div class="eymonk-footer__contact-item">
						<span class="icon" aria-hidden="true">✉</span>
						<span><?php eymonk_email_link(); ?></span>
					</div>
					<div class="eymonk-footer__contact-item">
						<span class="icon" aria-hidden="true">📍</span>
						<span>
							<?php eymonk_e( 'eymonk_address', '123 Business Street' ); ?>,
							<?php eymonk_e( 'eymonk_city', 'London' ); ?>,
							<?php eymonk_e( 'eymonk_postcode', 'EC1A 1BB' ); ?>,
							<?php esc_html_e( 'United Kingdom', 'eymonk-group' ); ?>
						</span>
					</div>
					<div class="eymonk-footer__contact-item">
						<span class="icon" aria-hidden="true">🕐</span>
						<span><?php esc_html_e( 'Mon–Fri: 9am – 6pm GMT', 'eymonk-group' ); ?></span>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Footer bottom bar -->
	<div class="eymonk-footer__bottom">
		<div class="eymonk-container">
			<div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:var(--space-4);">
				<p>
					&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
					<?php esc_html_e( 'EYMONK GROUP LTD. All rights reserved. Company registered in England &amp; Wales.', 'eymonk-group' ); ?>
				</p>
				<ul class="eymonk-footer__legal" role="list">
					<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'eymonk-group' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/terms-of-service/' ) ); ?>"><?php esc_html_e( 'Terms of Service', 'eymonk-group' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>"><?php esc_html_e( 'Cookie Policy', 'eymonk-group' ); ?></a></li>
				</ul>
			</div>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
