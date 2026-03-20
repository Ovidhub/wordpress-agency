<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php // Preconnect for Google Fonts performance ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip-to-content for accessibility -->
<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'eymonk-group' ); ?></a>

<!-- ===== TOP BAR ===== -->
<div class="eymonk-topbar" role="banner">
	<div class="eymonk-container">
		<div class="eymonk-topbar__inner">
			<div class="eymonk-topbar__contact">
				<span>📞 </span><?php eymonk_phone_link(); ?>
				&nbsp;|&nbsp;
				<span>✉ </span><?php eymonk_email_link(); ?>
				&nbsp;|&nbsp;
				<span>🇬🇧 UK-Based Business</span>
			</div>
			<div class="eymonk-topbar__social">
				<?php if ( eymonk_get( 'eymonk_facebook' ) ) : ?>
					<a href="<?php eymonk_e( 'eymonk_facebook' ); ?>" aria-label="<?php esc_attr_e( 'Facebook', 'eymonk-group' ); ?>" rel="noopener noreferrer" target="_blank">f</a>
				<?php endif; ?>
				<?php if ( eymonk_get( 'eymonk_instagram' ) ) : ?>
					<a href="<?php eymonk_e( 'eymonk_instagram' ); ?>" aria-label="<?php esc_attr_e( 'Instagram', 'eymonk-group' ); ?>" rel="noopener noreferrer" target="_blank">ig</a>
				<?php endif; ?>
				<?php if ( eymonk_get( 'eymonk_linkedin' ) ) : ?>
					<a href="<?php eymonk_e( 'eymonk_linkedin' ); ?>" aria-label="<?php esc_attr_e( 'LinkedIn', 'eymonk-group' ); ?>" rel="noopener noreferrer" target="_blank">in</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<!-- ===== MAIN HEADER ===== -->
<header id="masthead" class="eymonk-header" role="banner">
	<div class="eymonk-container">
		<div class="eymonk-header__inner">

			<!-- Logo -->
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="eymonk-logo" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> — <?php esc_attr_e( 'Home', 'eymonk-group' ); ?>">
					<div class="eymonk-logo__mark" aria-hidden="true">EG</div>
					<div class="eymonk-logo__text">
						<span class="eymonk-logo__name">EYMONK GROUP</span>
						<span class="eymonk-logo__tagline">Print · Design · Digital</span>
					</div>
				</a>
			<?php endif; ?>

			<!-- Desktop Navigation -->
			<nav id="site-navigation" class="eymonk-nav" aria-label="<?php esc_attr_e( 'Primary', 'eymonk-group' ); ?>">
				<ul class="eymonk-nav__list" role="list">

					<li class="eymonk-nav__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="eymonk-nav__link <?php echo is_front_page() ? 'is-active' : ''; ?>">
							<?php esc_html_e( 'Home', 'eymonk-group' ); ?>
						</a>
					</li>

					<!-- Services dropdown -->
					<li class="eymonk-nav__item">
						<a href="#" class="eymonk-nav__link" aria-haspopup="true" aria-expanded="false">
							<?php esc_html_e( 'Services', 'eymonk-group' ); ?> <span aria-hidden="true">▾</span>
						</a>
						<div class="eymonk-nav__dropdown" role="menu">
							<a href="<?php echo esc_url( home_url( '/printing-services/' ) ); ?>" role="menuitem">
								<span class="eymonk-nav__dropdown-icon" aria-hidden="true">🖨️</span>
								<span>
									<strong><?php esc_html_e( 'Printing Services', 'eymonk-group' ); ?></strong><br>
									<small><?php esc_html_e( 'Cards, flyers, stickers & more', 'eymonk-group' ); ?></small>
								</span>
							</a>
							<a href="<?php echo esc_url( home_url( '/website-design/' ) ); ?>" role="menuitem">
								<span class="eymonk-nav__dropdown-icon" aria-hidden="true">💻</span>
								<span>
									<strong><?php esc_html_e( 'Website Design', 'eymonk-group' ); ?></strong><br>
									<small><?php esc_html_e( 'Professional sites that convert', 'eymonk-group' ); ?></small>
								</span>
							</a>
							<a href="<?php echo esc_url( home_url( '/digital-marketing/' ) ); ?>" role="menuitem">
								<span class="eymonk-nav__dropdown-icon" aria-hidden="true">📈</span>
								<span>
									<strong><?php esc_html_e( 'Digital Marketing', 'eymonk-group' ); ?></strong><br>
									<small><?php esc_html_e( 'SEO, PPC & social media', 'eymonk-group' ); ?></small>
								</span>
							</a>
						</div>
					</li>

					<li class="eymonk-nav__item">
						<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="eymonk-nav__link <?php echo is_shop() ? 'is-active' : ''; ?>">
							<?php esc_html_e( 'Shop', 'eymonk-group' ); ?>
						</a>
					</li>

					<li class="eymonk-nav__item">
						<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="eymonk-nav__link <?php echo is_page( 'about' ) ? 'is-active' : ''; ?>">
							<?php esc_html_e( 'About', 'eymonk-group' ); ?>
						</a>
					</li>

					<li class="eymonk-nav__item">
						<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="eymonk-nav__link <?php echo is_home() ? 'is-active' : ''; ?>">
							<?php esc_html_e( 'Blog', 'eymonk-group' ); ?>
						</a>
					</li>

				</ul>
			</nav>

			<!-- Header Actions -->
			<div class="eymonk-header__actions">

				<?php if ( function_exists( 'WC' ) ) : ?>
					<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="eymonk-cart-link" aria-label="<?php esc_attr_e( 'View cart', 'eymonk-group' ); ?>">
						🛒
						<?php $count = WC()->cart ? WC()->cart->get_cart_contents_count() : 0; ?>
						<span class="eymonk-cart-count <?php echo $count > 0 ? '' : 'sr-only'; ?>"><?php echo esc_html( $count ); ?></span>
					</a>
				<?php endif; ?>

				<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--sm">
					<?php esc_html_e( 'Get a Quote', 'eymonk-group' ); ?>
				</a>

				<!-- Hamburger (mobile) -->
				<button
					class="eymonk-hamburger"
					aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'eymonk-group' ); ?>"
					aria-expanded="false"
					aria-controls="mobile-nav"
					type="button"
				>
					<span></span>
					<span></span>
					<span></span>
				</button>

			</div>

		</div>
	</div>
</header>

<!-- ===== MOBILE NAV DRAWER ===== -->
<div id="mobile-nav" class="eymonk-mobile-nav" aria-hidden="true" role="dialog" aria-label="<?php esc_attr_e( 'Mobile navigation', 'eymonk-group' ); ?>">
	<div class="eymonk-mobile-nav__overlay" aria-hidden="true"></div>
	<div class="eymonk-mobile-nav__drawer">
		<div class="eymonk-mobile-nav__header">
			<span class="eymonk-logo__name">EYMONK GROUP</span>
			<button class="eymonk-mobile-nav__close" aria-label="<?php esc_attr_e( 'Close menu', 'eymonk-group' ); ?>" type="button">✕</button>
		</div>
		<nav class="eymonk-mobile-nav__links" aria-label="<?php esc_attr_e( 'Mobile', 'eymonk-group' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'eymonk-group' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/printing-services/' ) ); ?>">🖨️ <?php esc_html_e( 'Printing Services', 'eymonk-group' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/website-design/' ) ); ?>">💻 <?php esc_html_e( 'Website Design', 'eymonk-group' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/digital-marketing/' ) ); ?>">📈 <?php esc_html_e( 'Digital Marketing', 'eymonk-group' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">🛒 <?php esc_html_e( 'Shop', 'eymonk-group' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About Us', 'eymonk-group' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog', 'eymonk-group' ); ?></a>
		</nav>
		<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--primary" style="width:100%;justify-content:center;">
			<?php esc_html_e( 'Get a Free Quote', 'eymonk-group' ); ?>
		</a>
		<div style="padding-top:var(--space-4); border-top:1px solid var(--colour-border);">
			<p style="font-size:var(--fs-sm);color:var(--colour-text-light);margin-bottom:var(--space-2);"><?php esc_html_e( 'Call us:', 'eymonk-group' ); ?></p>
			<?php eymonk_phone_link(); ?>
		</div>
	</div>
</div>
