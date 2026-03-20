<?php
/**
 * Front Page (Homepage) Template
 *
 * @package eymonk-group
 */

get_header();
?>

<!-- ============================================================
     SECTION 1 — HERO
     ============================================================ -->
<section class="eymonk-hero" aria-labelledby="hero-heading">
	<div class="eymonk-container">
		<div class="eymonk-hero__grid">

			<!-- Left: Content -->
			<div class="eymonk-hero__content animate-fade-up">
				<div class="eymonk-hero__badge">
					<span class="eymonk-hero__badge-dot"></span>
					🇬🇧 <?php esc_html_e( 'Trusted by UK Businesses', 'eymonk-group' ); ?>
				</div>

				<h1 id="hero-heading">
					<?php echo wp_kses_post( __( 'Print. Design.<br><span>Grow Your Business.</span>', 'eymonk-group' ) ); ?>
				</h1>

				<p class="eymonk-hero__description">
					<?php esc_html_e( 'Professional printing services, stunning website design, and results-driven digital marketing — everything your UK business needs to stand out and succeed.', 'eymonk-group' ); ?>
				</p>

				<div class="eymonk-cta-group">
					<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
						<?php esc_html_e( '🚀 Get a Free Quote', 'eymonk-group' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="eymonk-btn eymonk-btn--secondary eymonk-btn--lg">
						<?php esc_html_e( 'Shop Print Products', 'eymonk-group' ); ?>
					</a>
				</div>

				<!-- Micro-trust signals -->
				<div class="eymonk-hero__trust">
					<div class="eymonk-hero__trust-item">
						<span class="icon" aria-hidden="true">✅</span>
						<?php esc_html_e( 'Next-day delivery available', 'eymonk-group' ); ?>
					</div>
					<div class="eymonk-hero__trust-item">
						<span class="icon" aria-hidden="true">⭐</span>
						<?php esc_html_e( '500+ happy UK clients', 'eymonk-group' ); ?>
					</div>
					<div class="eymonk-hero__trust-item">
						<span class="icon" aria-hidden="true">🔒</span>
						<?php esc_html_e( 'Secure checkout', 'eymonk-group' ); ?>
					</div>
				</div>
			</div>

			<!-- Right: Visual card -->
			<div class="eymonk-hero__visual animate-fade-up animate-delay-2">
				<div class="eymonk-hero__card">
					<h3 style="color:#fff;margin-bottom:var(--space-6);font-size:var(--fs-xl);">
						<?php esc_html_e( 'Quick Quote', 'eymonk-group' ); ?>
					</h3>
					<form method="post" action="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-hero-form">
						<?php wp_nonce_field( 'eymonk_quick_quote', 'eymonk_nonce' ); ?>
						<div style="margin-bottom:var(--space-4);">
							<label for="hero-service" class="sr-only"><?php esc_html_e( 'Select Service', 'eymonk-group' ); ?></label>
							<select id="hero-service" name="service" class="eymonk-form__select" style="background-color:#fff;">
								<option value=""><?php esc_html_e( 'What do you need?', 'eymonk-group' ); ?></option>
								<option value="printing"><?php esc_html_e( '🖨️ Printing Services', 'eymonk-group' ); ?></option>
								<option value="website"><?php esc_html_e( '💻 Website Design', 'eymonk-group' ); ?></option>
								<option value="marketing"><?php esc_html_e( '📈 Digital Marketing', 'eymonk-group' ); ?></option>
								<option value="bundle"><?php esc_html_e( '🎯 Full Bundle', 'eymonk-group' ); ?></option>
							</select>
						</div>
						<div style="margin-bottom:var(--space-4);">
							<label for="hero-name" class="sr-only"><?php esc_html_e( 'Your name', 'eymonk-group' ); ?></label>
							<input type="text" id="hero-name" name="name" class="eymonk-form__input" placeholder="<?php esc_attr_e( 'Your name', 'eymonk-group' ); ?>" required>
						</div>
						<div style="margin-bottom:var(--space-4);">
							<label for="hero-email" class="sr-only"><?php esc_html_e( 'Your email', 'eymonk-group' ); ?></label>
							<input type="email" id="hero-email" name="email" class="eymonk-form__input" placeholder="<?php esc_attr_e( 'Your email address', 'eymonk-group' ); ?>" required>
						</div>
						<button type="submit" class="eymonk-btn eymonk-btn--primary" style="width:100%;justify-content:center;">
							<?php esc_html_e( 'Get My Free Quote →', 'eymonk-group' ); ?>
						</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ============================================================
     SECTION 2 — TRUST BAR (logos / stats)
     ============================================================ -->
<section class="eymonk-section eymonk-section--sm eymonk-section--bg-light" aria-label="<?php esc_attr_e( 'Key statistics', 'eymonk-group' ); ?>">
	<div class="eymonk-container">
		<div class="eymonk-stats">
			<div class="eymonk-stat">
				<span class="eymonk-stat__number" data-target="500">500+</span>
				<span class="eymonk-stat__label"><?php esc_html_e( 'Happy UK Clients', 'eymonk-group' ); ?></span>
			</div>
			<div class="eymonk-stat">
				<span class="eymonk-stat__number" data-target="1200">1,200+</span>
				<span class="eymonk-stat__label"><?php esc_html_e( 'Projects Delivered', 'eymonk-group' ); ?></span>
			</div>
			<div class="eymonk-stat">
				<span class="eymonk-stat__number" data-target="98">98%</span>
				<span class="eymonk-stat__label"><?php esc_html_e( 'Client Satisfaction', 'eymonk-group' ); ?></span>
			</div>
			<div class="eymonk-stat">
				<span class="eymonk-stat__number" data-target="5">5★</span>
				<span class="eymonk-stat__label"><?php esc_html_e( 'Average Google Rating', 'eymonk-group' ); ?></span>
			</div>
		</div>
	</div>
</section>

<!-- ============================================================
     SECTION 3 — SERVICES OVERVIEW
     ============================================================ -->
<section id="services" class="eymonk-section" aria-labelledby="services-heading">
	<div class="eymonk-container">

		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'What We Offer', 'eymonk-group' ); ?></span>
			<h2 id="services-heading"><?php esc_html_e( 'Everything Your UK Business Needs', 'eymonk-group' ); ?></h2>
			<p><?php esc_html_e( 'From first impressions on paper to a powerful online presence — we handle it all so you can focus on running your business.', 'eymonk-group' ); ?></p>
		</header>

		<div class="eymonk-grid eymonk-grid--3">

			<!-- Printing -->
			<article class="eymonk-card eymonk-service-card">
				<div class="eymonk-card__icon" aria-hidden="true">🖨️</div>
				<h3 class="eymonk-card__title"><?php esc_html_e( 'Printing Services', 'eymonk-group' ); ?></h3>
				<p class="eymonk-card__body">
					<?php esc_html_e( 'High-quality printing for business cards, flyers, leaflets, stickers, banners and more. Fast turnaround with UK delivery.', 'eymonk-group' ); ?>
				</p>
				<ul class="eymonk-card__list" aria-label="<?php esc_attr_e( 'Printing products', 'eymonk-group' ); ?>">
					<li><?php esc_html_e( 'Business Cards', 'eymonk-group' ); ?></li>
					<li><?php esc_html_e( 'Flyers & Leaflets', 'eymonk-group' ); ?></li>
					<li><?php esc_html_e( 'Stickers & Labels', 'eymonk-group' ); ?></li>
					<li><?php esc_html_e( 'Banners & Signage', 'eymonk-group' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/printing-services/' ) ); ?>" class="eymonk-btn eymonk-btn--outline">
					<?php esc_html_e( 'View Printing →', 'eymonk-group' ); ?>
				</a>
			</article>

			<!-- Website Design -->
			<article class="eymonk-card eymonk-service-card" style="border-color:var(--colour-primary);">
				<div class="eymonk-pricing__badge"><?php esc_html_e( 'Most Popular', 'eymonk-group' ); ?></div>
				<div class="eymonk-card__icon" style="background:linear-gradient(135deg,var(--colour-secondary),#ff6b3d);" aria-hidden="true">💻</div>
				<h3 class="eymonk-card__title"><?php esc_html_e( 'Website Design', 'eymonk-group' ); ?></h3>
				<p class="eymonk-card__body">
					<?php esc_html_e( 'Professional WordPress websites designed to convert visitors into customers. Mobile-first, fast and SEO-optimised.', 'eymonk-group' ); ?>
				</p>
				<ul class="eymonk-card__list" aria-label="<?php esc_attr_e( 'Website services', 'eymonk-group' ); ?>">
					<li><?php esc_html_e( 'Custom WordPress Sites', 'eymonk-group' ); ?></li>
					<li><?php esc_html_e( 'E-commerce (WooCommerce)', 'eymonk-group' ); ?></li>
					<li><?php esc_html_e( 'Landing Pages', 'eymonk-group' ); ?></li>
					<li><?php esc_html_e( 'SEO-Ready Structure', 'eymonk-group' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/website-design/' ) ); ?>" class="eymonk-btn eymonk-btn--primary">
					<?php esc_html_e( 'View Web Design →', 'eymonk-group' ); ?>
				</a>
			</article>

			<!-- Digital Marketing -->
			<article class="eymonk-card eymonk-service-card">
				<div class="eymonk-card__icon" aria-hidden="true">📈</div>
				<h3 class="eymonk-card__title"><?php esc_html_e( 'Digital Marketing', 'eymonk-group' ); ?></h3>
				<p class="eymonk-card__body">
					<?php esc_html_e( 'Data-driven strategies that grow your online visibility, attract quality leads, and maximise your return on investment.', 'eymonk-group' ); ?>
				</p>
				<ul class="eymonk-card__list" aria-label="<?php esc_attr_e( 'Marketing services', 'eymonk-group' ); ?>">
					<li><?php esc_html_e( 'Search Engine Optimisation (SEO)', 'eymonk-group' ); ?></li>
					<li><?php esc_html_e( 'Google Ads / PPC', 'eymonk-group' ); ?></li>
					<li><?php esc_html_e( 'Social Media Marketing', 'eymonk-group' ); ?></li>
					<li><?php esc_html_e( 'Email Marketing', 'eymonk-group' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/digital-marketing/' ) ); ?>" class="eymonk-btn eymonk-btn--outline">
					<?php esc_html_e( 'View Marketing →', 'eymonk-group' ); ?>
				</a>
			</article>

		</div>

	</div>
</section>

<!-- ============================================================
     SECTION 4 — WHY CHOOSE US
     ============================================================ -->
<section class="eymonk-section eymonk-section--bg-light" aria-labelledby="why-heading">
	<div class="eymonk-container">
		<div style="display:grid;grid-template-columns:1fr;gap:var(--space-16);align-items:center;">

			<div>
				<span class="eymonk-label"><?php esc_html_e( 'Why EYMONK GROUP', 'eymonk-group' ); ?></span>
				<h2 id="why-heading" style="margin-top:var(--space-3);margin-bottom:var(--space-6);">
					<?php esc_html_e( 'The UK Agency That Delivers Results', 'eymonk-group' ); ?>
				</h2>
				<p style="margin-bottom:var(--space-8);">
					<?php esc_html_e( 'We combine creative expertise with technical know-how to give your business the edge it deserves. No jargon, no hidden fees — just great work and measurable results.', 'eymonk-group' ); ?>
				</p>

				<div class="eymonk-feature-list">
					<div class="eymonk-feature-item">
						<div class="eymonk-feature-item__icon" aria-hidden="true">🎯</div>
						<div>
							<div class="eymonk-feature-item__title"><?php esc_html_e( 'Results-Focused', 'eymonk-group' ); ?></div>
							<div class="eymonk-feature-item__desc"><?php esc_html_e( 'Every project is designed to generate real business outcomes — more leads, more sales, more growth.', 'eymonk-group' ); ?></div>
						</div>
					</div>
					<div class="eymonk-feature-item">
						<div class="eymonk-feature-item__icon" aria-hidden="true">🇬🇧</div>
						<div>
							<div class="eymonk-feature-item__title"><?php esc_html_e( 'UK-Based Team', 'eymonk-group' ); ?></div>
							<div class="eymonk-feature-item__desc"><?php esc_html_e( 'Based in the UK, we understand the local market and speak the same language as your customers.', 'eymonk-group' ); ?></div>
						</div>
					</div>
					<div class="eymonk-feature-item">
						<div class="eymonk-feature-item__icon" aria-hidden="true">⚡</div>
						<div>
							<div class="eymonk-feature-item__title"><?php esc_html_e( 'Fast Turnaround', 'eymonk-group' ); ?></div>
							<div class="eymonk-feature-item__desc"><?php esc_html_e( 'Need it yesterday? We offer express print delivery and rapid website delivery for time-sensitive projects.', 'eymonk-group' ); ?></div>
						</div>
					</div>
					<div class="eymonk-feature-item">
						<div class="eymonk-feature-item__icon" aria-hidden="true">💬</div>
						<div>
							<div class="eymonk-feature-item__title"><?php esc_html_e( 'Dedicated Support', 'eymonk-group' ); ?></div>
							<div class="eymonk-feature-item__desc"><?php esc_html_e( 'A real person you can call or email. No support tickets, no offshore call centres.', 'eymonk-group' ); ?></div>
						</div>
					</div>
				</div>

				<div class="eymonk-cta-group" style="margin-top:var(--space-10);">
					<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="eymonk-btn eymonk-btn--primary">
						<?php esc_html_e( 'About Our Team', 'eymonk-group' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--outline">
						<?php esc_html_e( 'Start a Project', 'eymonk-group' ); ?>
					</a>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ============================================================
     SECTION 5 — FEATURED PRINT PRODUCTS (WooCommerce)
     ============================================================ -->
<?php if ( function_exists( 'woocommerce_product_loop' ) || true ) : ?>
<section class="eymonk-section" aria-labelledby="shop-heading">
	<div class="eymonk-container">

		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Print Shop', 'eymonk-group' ); ?></span>
			<h2 id="shop-heading"><?php esc_html_e( 'Order Print Products Online', 'eymonk-group' ); ?></h2>
			<p><?php esc_html_e( 'Browse our range of professional print products. Customise, upload your design, and get fast UK delivery.', 'eymonk-group' ); ?></p>
		</header>

		<?php
		// Featured products via WooCommerce shortcode or custom query
		if ( function_exists( 'wc_get_products' ) ) :
			$products = wc_get_products( [
				'status'   => 'publish',
				'limit'    => 6,
				'featured' => true,
			] );

			if ( empty( $products ) ) {
				// Fallback: get recent products
				$products = wc_get_products( [
					'status' => 'publish',
					'limit'  => 6,
				] );
			}

			if ( ! empty( $products ) ) : ?>
				<div class="eymonk-grid eymonk-grid--3">
					<?php foreach ( $products as $product ) : ?>
						<article class="eymonk-product-card">
							<a href="<?php echo esc_url( $product->get_permalink() ); ?>" class="eymonk-product-card__image">
								<?php if ( $product->get_image_id() ) : ?>
									<?php echo wp_kses_post( $product->get_image( 'eymonk-thumb' ) ); ?>
								<?php else : ?>
									<span aria-hidden="true" style="font-size:3rem;">🖨️</span>
								<?php endif; ?>
							</a>
							<div class="eymonk-product-card__body">
								<span class="eymonk-product-card__tag">
									<?php
									$cats = wp_get_post_terms( $product->get_id(), 'product_cat', [ 'fields' => 'names' ] );
									echo esc_html( ! empty( $cats ) ? $cats[0] : __( 'Print', 'eymonk-group' ) );
									?>
								</span>
								<h3 class="eymonk-product-card__title">
									<a href="<?php echo esc_url( $product->get_permalink() ); ?>" style="color:inherit;"><?php echo esc_html( $product->get_name() ); ?></a>
								</h3>
								<div class="eymonk-product-card__price">
									<?php echo wp_kses_post( $product->get_price_html() ); ?>
								</div>
								<div style="margin-top:var(--space-4);">
									<?php woocommerce_template_loop_add_to_cart( [ 'product' => $product ] ); ?>
								</div>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			<?php else : ?>
				<!-- Placeholder when no products are published yet -->
				<div class="eymonk-grid eymonk-grid--3">
					<?php
					$placeholder_products = [
						[ 'icon' => '🗂️', 'name' => __( 'Business Cards', 'eymonk-group' ),   'price' => '£19.99', 'desc' => __( 'From 250 cards', 'eymonk-group' ) ],
						[ 'icon' => '📄', 'name' => __( 'Flyers A5',       'eymonk-group' ),   'price' => '£29.99', 'desc' => __( 'From 500 flyers', 'eymonk-group' ) ],
						[ 'icon' => '🏷️', 'name' => __( 'Custom Stickers', 'eymonk-group' ),   'price' => '£14.99', 'desc' => __( 'From 100 stickers', 'eymonk-group' ) ],
						[ 'icon' => '📋', 'name' => __( 'Letterheads',     'eymonk-group' ),   'price' => '£24.99', 'desc' => __( 'From 250 sheets', 'eymonk-group' ) ],
						[ 'icon' => '🏳️', 'name' => __( 'Roll-Up Banners', 'eymonk-group' ),   'price' => '£59.99', 'desc' => __( 'From 1 banner', 'eymonk-group' ) ],
						[ 'icon' => '📦', 'name' => __( 'Branded Packaging','eymonk-group' ),  'price' => '£49.99', 'desc' => __( 'Custom box printing', 'eymonk-group' ) ],
					];
					foreach ( $placeholder_products as $p ) : ?>
						<article class="eymonk-product-card">
							<div class="eymonk-product-card__image">
								<span aria-hidden="true"><?php echo esc_html( $p['icon'] ); ?></span>
							</div>
							<div class="eymonk-product-card__body">
								<span class="eymonk-product-card__tag"><?php esc_html_e( 'Print', 'eymonk-group' ); ?></span>
								<h3 class="eymonk-product-card__title"><?php echo esc_html( $p['name'] ); ?></h3>
								<p style="font-size:var(--fs-sm);color:var(--colour-text-light);margin-bottom:var(--space-3);"><?php echo esc_html( $p['desc'] ); ?></p>
								<div class="eymonk-product-card__price">
									<?php echo esc_html( $p['price'] ); ?>
									<small><?php esc_html_e( '+ VAT', 'eymonk-group' ); ?></small>
								</div>
								<div style="margin-top:var(--space-4);">
									<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="eymonk-btn eymonk-btn--outline eymonk-btn--sm">
										<?php esc_html_e( 'Order Now', 'eymonk-group' ); ?>
									</a>
								</div>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		<?php else : ?>
			<p style="text-align:center;"><?php esc_html_e( 'WooCommerce is not active. Install WooCommerce to display products.', 'eymonk-group' ); ?></p>
		<?php endif; ?>

		<div class="eymonk-text-center" style="margin-top:var(--space-12);">
			<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
				<?php esc_html_e( 'Browse All Print Products →', 'eymonk-group' ); ?>
			</a>
		</div>

	</div>
</section>
<?php endif; ?>

<!-- ============================================================
     SECTION 6 — HOW IT WORKS
     ============================================================ -->
<section class="eymonk-section eymonk-section--bg-dark" aria-labelledby="process-heading">
	<div class="eymonk-container">

		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label" style="color:var(--colour-accent);"><?php esc_html_e( 'Our Process', 'eymonk-group' ); ?></span>
			<h2 id="process-heading" style="color:var(--colour-white);"><?php esc_html_e( 'How We Work', 'eymonk-group' ); ?></h2>
			<p style="color:rgba(255,255,255,0.75);"><?php esc_html_e( 'Simple, transparent, and stress-free. From brief to delivery, here\'s what to expect when you work with EYMONK GROUP.', 'eymonk-group' ); ?></p>
		</header>

		<div class="eymonk-grid eymonk-grid--4">
			<?php
			$steps = [
				[
					'num'   => '01',
					'icon'  => '📋',
					'title' => __( 'Tell Us What You Need', 'eymonk-group' ),
					'desc'  => __( 'Complete our quick quote form or give us a call. The more detail you give, the better your quote.', 'eymonk-group' ),
				],
				[
					'num'   => '02',
					'icon'  => '💡',
					'title' => __( 'We Create Your Plan', 'eymonk-group' ),
					'desc'  => __( 'Our team reviews your brief, asks any questions, and sends you a tailored proposal within 24 hours.', 'eymonk-group' ),
				],
				[
					'num'   => '03',
					'icon'  => '🎨',
					'title' => __( 'Design & Production', 'eymonk-group' ),
					'desc'  => __( 'We design, build or print to the highest standards — with your approval at every stage.', 'eymonk-group' ),
				],
				[
					'num'   => '04',
					'icon'  => '🚀',
					'title' => __( 'Deliver & Support', 'eymonk-group' ),
					'desc'  => __( 'Your printed materials are dispatched or your website goes live. We stay in touch to ensure everything is perfect.', 'eymonk-group' ),
				],
			];
			foreach ( $steps as $step ) : ?>
				<div style="text-align:center;">
					<div style="display:inline-flex;align-items:center;justify-content:center;width:64px;height:64px;border-radius:var(--radius-full);background:rgba(255,255,255,0.12);border:1px solid rgba(255,255,255,0.2);font-size:2rem;margin-bottom:var(--space-5);" aria-hidden="true">
						<?php echo esc_html( $step['icon'] ); ?>
					</div>
					<div style="font-size:var(--fs-xs);font-weight:700;letter-spacing:0.1em;color:var(--colour-accent);margin-bottom:var(--space-2);"><?php echo esc_html( $step['num'] ); ?></div>
					<h3 style="color:var(--colour-white);font-size:var(--fs-lg);margin-bottom:var(--space-3);"><?php echo esc_html( $step['title'] ); ?></h3>
					<p style="color:rgba(255,255,255,0.65);font-size:var(--fs-sm);"><?php echo esc_html( $step['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>

<!-- ============================================================
     SECTION 7 — TESTIMONIALS
     ============================================================ -->
<section class="eymonk-section eymonk-section--bg-light" aria-labelledby="testimonials-heading">
	<div class="eymonk-container">

		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Client Reviews', 'eymonk-group' ); ?></span>
			<h2 id="testimonials-heading"><?php esc_html_e( 'What Our UK Clients Say', 'eymonk-group' ); ?></h2>
			<p><?php esc_html_e( 'Don\'t just take our word for it — here\'s what businesses across the UK say about working with us.', 'eymonk-group' ); ?></p>
		</header>

		<div class="eymonk-grid eymonk-grid--3">
			<?php
			$testimonials = [
				[
					'body'    => __( 'EYMONK GROUP transformed our brand. The business cards and brochures look absolutely premium, and the website they built for us generated 3× more enquiries in the first month.', 'eymonk-group' ),
					'name'    => 'Sarah T.',
					'initials'=> 'ST',
					'role'    => __( 'Director, Thornton Solicitors, Manchester', 'eymonk-group' ),
					'rating'  => 5,
				],
				[
					'body'    => __( 'Brilliant service from start to finish. Ordered 1,000 flyers on a Monday and had them in hand by Wednesday. The quality was excellent and the design team nailed our brief.', 'eymonk-group' ),
					'name'    => 'James P.',
					'initials'=> 'JP',
					'role'    => __( 'Owner, Parkside Café, Birmingham', 'eymonk-group' ),
					'rating'  => 5,
				],
				[
					'body'    => __( 'The digital marketing campaign they ran for us increased our organic traffic by 140% in three months. Transparent reporting, honest advice, and real results.', 'eymonk-group' ),
					'name'    => 'Emma L.',
					'initials'=> 'EL',
					'role'    => __( 'Marketing Manager, LunarTech Solutions, London', 'eymonk-group' ),
					'rating'  => 5,
				],
			];
			foreach ( $testimonials as $t ) : ?>
				<blockquote class="eymonk-testimonial">
					<div class="eymonk-testimonial__stars" aria-label="<?php echo esc_attr( sprintf( _n( '%d star rating', '%d star rating', $t['rating'], 'eymonk-group' ), $t['rating'] ) ); ?>">
						<?php echo str_repeat( '★', $t['rating'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</div>
					<p class="eymonk-testimonial__body"><?php echo esc_html( $t['body'] ); ?></p>
					<footer class="eymonk-testimonial__author">
						<div class="eymonk-testimonial__avatar" aria-hidden="true"><?php echo esc_html( $t['initials'] ); ?></div>
						<div>
							<cite class="eymonk-testimonial__name"><?php echo esc_html( $t['name'] ); ?></cite>
							<span class="eymonk-testimonial__role"><?php echo esc_html( $t['role'] ); ?></span>
						</div>
					</footer>
				</blockquote>
			<?php endforeach; ?>
		</div>

	</div>
</section>

<!-- ============================================================
     SECTION 8 — CTA BANNER
     ============================================================ -->
<section class="eymonk-section" style="background:linear-gradient(135deg,var(--colour-secondary) 0%,#c93812 100%);color:#fff;" aria-labelledby="cta-heading">
	<div class="eymonk-container eymonk-text-center">
		<span class="eymonk-label" style="color:rgba(255,255,255,0.8);"><?php esc_html_e( 'Get Started Today', 'eymonk-group' ); ?></span>
		<h2 id="cta-heading" style="color:#fff;margin-top:var(--space-3);margin-bottom:var(--space-4);">
			<?php esc_html_e( 'Ready to Grow Your UK Business?', 'eymonk-group' ); ?>
		</h2>
		<p style="color:rgba(255,255,255,0.85);font-size:var(--fs-md);max-width:55ch;margin-left:auto;margin-right:auto;margin-bottom:var(--space-8);">
			<?php esc_html_e( 'Get a free, no-obligation quote today. We\'ll respond within 2 business hours.', 'eymonk-group' ); ?>
		</p>
		<div class="eymonk-cta-group" style="justify-content:center;">
			<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--secondary eymonk-btn--xl">
				<?php esc_html_e( '🚀 Get a Free Quote', 'eymonk-group' ); ?>
			</a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="eymonk-btn eymonk-btn--ghost" style="color:#fff;border-color:rgba(255,255,255,0.4);">
				<?php esc_html_e( 'Contact Us', 'eymonk-group' ); ?>
			</a>
		</div>
	</div>
</section>

<!-- ============================================================
     SECTION 9 — BLOG PREVIEW
     ============================================================ -->
<?php
$blog_posts = new WP_Query( [
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC',
] );

if ( $blog_posts->have_posts() ) : ?>
<section class="eymonk-section eymonk-section--bg-light" aria-labelledby="blog-heading">
	<div class="eymonk-container">

		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Latest Insights', 'eymonk-group' ); ?></span>
			<h2 id="blog-heading"><?php esc_html_e( 'Tips & Advice for UK Businesses', 'eymonk-group' ); ?></h2>
		</header>

		<div class="eymonk-grid eymonk-grid--3">
			<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
				<article class="eymonk-card" style="padding:0;overflow:hidden;">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" style="display:block;aspect-ratio:16/9;overflow:hidden;border-radius:var(--radius-xl) var(--radius-xl) 0 0;">
							<?php the_post_thumbnail( 'eymonk-card', [ 'style' => 'width:100%;height:100%;object-fit:cover;' ] ); ?>
						</a>
					<?php endif; ?>
					<div style="padding:var(--space-6);">
						<div style="font-size:var(--fs-xs);color:var(--colour-text-light);margin-bottom:var(--space-3);">
							<?php the_date( 'd M Y' ); ?>
						</div>
						<h3 style="font-size:var(--fs-lg);margin-bottom:var(--space-3);">
							<a href="<?php the_permalink(); ?>" style="color:var(--colour-text);"><?php the_title(); ?></a>
						</h3>
						<p style="font-size:var(--fs-sm);"><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="eymonk-btn eymonk-btn--ghost" style="margin-top:var(--space-4);padding-left:0;">
							<?php esc_html_e( 'Read more →', 'eymonk-group' ); ?>
						</a>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<div class="eymonk-text-center" style="margin-top:var(--space-12);">
			<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="eymonk-btn eymonk-btn--outline">
				<?php esc_html_e( 'View All Articles →', 'eymonk-group' ); ?>
			</a>
		</div>

	</div>
</section>
<?php
endif;
?>

<?php get_footer(); ?>
