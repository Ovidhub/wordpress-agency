<?php
/**
 * Template Name: Website Design
 * Template Post Type: page
 *
 * @package eymonk-group
 */

get_header();
?>

<!-- ===== PAGE HERO ===== -->
<section class="eymonk-page-hero" aria-labelledby="web-hero-heading">
	<div class="eymonk-container">
		<nav class="eymonk-breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'eymonk-group' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'eymonk-group' ); ?></a>
			<span>/</span>
			<span><?php esc_html_e( 'Website Design', 'eymonk-group' ); ?></span>
		</nav>
		<h1 id="web-hero-heading"><?php esc_html_e( 'Professional Website Design for UK Businesses', 'eymonk-group' ); ?></h1>
		<p><?php esc_html_e( 'Beautiful, fast, mobile-first WordPress websites that turn visitors into customers. No templates — every site is built for your brand.', 'eymonk-group' ); ?></p>
		<div class="eymonk-cta-group" style="justify-content:center;margin-top:var(--space-8);">
			<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
				<?php esc_html_e( 'Get a Web Design Quote', 'eymonk-group' ); ?>
			</a>
			<a href="#packages" class="eymonk-btn eymonk-btn--secondary eymonk-btn--lg">
				<?php esc_html_e( 'View Packages', 'eymonk-group' ); ?>
			</a>
		</div>
	</div>
</section>

<!-- ===== TRUST BADGES ===== -->
<section class="eymonk-section eymonk-section--sm eymonk-section--bg-light">
	<div class="eymonk-container">
		<div class="eymonk-trust-badges">
			<?php
			$badges = [
				[ 'icon' => '📱', 'strong' => __( 'Mobile-First Design', 'eymonk-group' ),  'span' => __( '100% responsive', 'eymonk-group' ) ],
				[ 'icon' => '⚡', 'strong' => __( 'Fast Loading',         'eymonk-group' ),  'span' => __( 'Core Web Vitals optimised', 'eymonk-group' ) ],
				[ 'icon' => '🔍', 'strong' => __( 'SEO-Ready',            'eymonk-group' ),  'span' => __( 'Built to rank on Google', 'eymonk-group' ) ],
				[ 'icon' => '🛡️', 'strong' => __( 'Secure & Maintained', 'eymonk-group' ),  'span' => __( 'SSL, backups & updates', 'eymonk-group' ) ],
				[ 'icon' => '💳', 'strong' => __( 'E-commerce Ready',     'eymonk-group' ),  'span' => __( 'WooCommerce integration', 'eymonk-group' ) ],
			];
			foreach ( $badges as $b ) : ?>
				<div class="eymonk-trust-badge">
					<span class="eymonk-trust-badge__icon" aria-hidden="true"><?php echo esc_html( $b['icon'] ); ?></span>
					<div class="eymonk-trust-badge__text">
						<strong><?php echo esc_html( $b['strong'] ); ?></strong>
						<span><?php echo esc_html( $b['span'] ); ?></span>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== SERVICES WE OFFER ===== -->
<section class="eymonk-section" aria-labelledby="web-services-heading">
	<div class="eymonk-container">
		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Web Design Services', 'eymonk-group' ); ?></span>
			<h2 id="web-services-heading"><?php esc_html_e( 'Everything From Brochure Sites to Online Shops', 'eymonk-group' ); ?></h2>
			<p><?php esc_html_e( 'Whatever your business needs, we\'ll build a website that works hard for you — generating enquiries, sales and brand authority.', 'eymonk-group' ); ?></p>
		</header>

		<div class="eymonk-grid eymonk-grid--3">
			<?php
			$services = [
				[
					'icon'  => '🏢',
					'title' => __( 'Business / Brochure Site', 'eymonk-group' ),
					'desc'  => __( 'A polished, professional website showcasing your services, team, and testimonials. Perfect for local businesses, consultants and tradespeople.', 'eymonk-group' ),
					'items' => [
						__( 'Up to 10 pages', 'eymonk-group' ),
						__( 'Contact & enquiry forms', 'eymonk-group' ),
						__( 'Google Maps integration', 'eymonk-group' ),
						__( 'On-page SEO setup', 'eymonk-group' ),
					],
				],
				[
					'icon'  => '🛒',
					'title' => __( 'E-Commerce Website', 'eymonk-group' ),
					'desc'  => __( 'A fully functional WooCommerce online store with product pages, payment gateway integration, and a seamless checkout experience.', 'eymonk-group' ),
					'items' => [
						__( 'Unlimited products', 'eymonk-group' ),
						__( 'Stripe & PayPal payment integration', 'eymonk-group' ),
						__( 'Inventory management', 'eymonk-group' ),
						__( 'Abandoned cart recovery', 'eymonk-group' ),
					],
				],
				[
					'icon'  => '🎯',
					'title' => __( 'Landing Pages', 'eymonk-group' ),
					'desc'  => __( 'High-converting landing pages for ad campaigns, product launches, or lead generation. Built to maximise your ROI.', 'eymonk-group' ),
					'items' => [
						__( 'A/B testing ready', 'eymonk-group' ),
						__( 'CRO best practices', 'eymonk-group' ),
						__( 'Fast load time', 'eymonk-group' ),
						__( 'Lead capture forms', 'eymonk-group' ),
					],
				],
			];
			foreach ( $services as $s ) : ?>
				<article class="eymonk-card">
					<div class="eymonk-card__icon" aria-hidden="true"><?php echo esc_html( $s['icon'] ); ?></div>
					<h3 class="eymonk-card__title"><?php echo esc_html( $s['title'] ); ?></h3>
					<p class="eymonk-card__body"><?php echo esc_html( $s['desc'] ); ?></p>
					<ul class="eymonk-card__list">
						<?php foreach ( $s['items'] as $item ) : ?>
							<li><?php echo esc_html( $item ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a href="<?php echo esc_url( home_url( '/get-a-quote/?service=website' ) ); ?>" class="eymonk-btn eymonk-btn--outline">
						<?php esc_html_e( 'Get a Quote', 'eymonk-group' ); ?>
					</a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== OUR PROCESS ===== -->
<section class="eymonk-section eymonk-section--bg-light" aria-labelledby="web-process-heading">
	<div class="eymonk-container">
		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Our Process', 'eymonk-group' ); ?></span>
			<h2 id="web-process-heading"><?php esc_html_e( 'From Brief to Live — Our Website Build Process', 'eymonk-group' ); ?></h2>
		</header>
		<div class="eymonk-grid eymonk-grid--4">
			<?php
			$steps = [
				[ 'n' => '1', 'icon' => '📋', 'title' => __( 'Discovery Call',   'eymonk-group' ), 'desc' => __( 'We learn about your business, goals, audience, and competitors to build the perfect strategy.', 'eymonk-group' ) ],
				[ 'n' => '2', 'icon' => '🎨', 'title' => __( 'Design Mockup',    'eymonk-group' ), 'desc' => __( 'We present a full-colour design concept for your approval before a single line of code is written.', 'eymonk-group' ) ],
				[ 'n' => '3', 'icon' => '💻', 'title' => __( 'Build & Test',     'eymonk-group' ), 'desc' => __( 'We build your site on a staging environment and run comprehensive speed, SEO and usability tests.', 'eymonk-group' ) ],
				[ 'n' => '4', 'icon' => '🚀', 'title' => __( 'Launch & Support', 'eymonk-group' ), 'desc' => __( 'We launch your site, submit to Google, and provide 30 days of free post-launch support.', 'eymonk-group' ) ],
			];
			foreach ( $steps as $s ) : ?>
				<div style="text-align:center;padding:var(--space-4);">
					<div style="display:inline-flex;align-items:center;justify-content:center;width:64px;height:64px;border-radius:var(--radius-full);background:var(--colour-primary);color:#fff;font-size:2rem;margin-bottom:var(--space-4);" aria-hidden="true"><?php echo esc_html( $s['icon'] ); ?></div>
					<div style="font-size:var(--fs-xs);font-weight:700;letter-spacing:0.1em;color:var(--colour-secondary);margin-bottom:var(--space-1);">
						<?php printf( esc_html__( 'Step %s', 'eymonk-group' ), esc_html( $s['n'] ) ); ?>
					</div>
					<h3 style="font-size:var(--fs-lg);margin-bottom:var(--space-2);"><?php echo esc_html( $s['title'] ); ?></h3>
					<p style="font-size:var(--fs-sm);"><?php echo esc_html( $s['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== PRICING PACKAGES ===== -->
<section id="packages" class="eymonk-section" aria-labelledby="pricing-heading">
	<div class="eymonk-container">
		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Pricing', 'eymonk-group' ); ?></span>
			<h2 id="pricing-heading"><?php esc_html_e( 'Website Design Packages', 'eymonk-group' ); ?></h2>
			<p><?php esc_html_e( 'Transparent, fixed-price packages for every stage of your business growth. No hourly rates, no surprise invoices.', 'eymonk-group' ); ?></p>
		</header>

		<div class="eymonk-grid eymonk-grid--3">

			<!-- Starter -->
			<div class="eymonk-pricing-card">
				<div class="eymonk-pricing__name"><?php esc_html_e( 'Starter', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__desc"><?php esc_html_e( 'Perfect for sole traders and new businesses.', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__price">
					<span class="eymonk-pricing__currency">£</span>
					<span class="eymonk-pricing__amount">499</span>
					<span class="eymonk-pricing__period"><?php esc_html_e( '+ VAT', 'eymonk-group' ); ?></span>
				</div>
				<ul class="eymonk-pricing__features">
					<li><span class="check">✓</span> <?php esc_html_e( 'Up to 5 pages', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Mobile responsive', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Contact form', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'On-page SEO', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Google Analytics setup', 'eymonk-group' ); ?></li>
					<li><span class="cross">✕</span> <?php esc_html_e( 'E-commerce', 'eymonk-group' ); ?></li>
					<li><span class="cross">✕</span> <?php esc_html_e( 'Blog', 'eymonk-group' ); ?></li>
					<li><span class="cross">✕</span> <?php esc_html_e( 'Ongoing maintenance', 'eymonk-group' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/get-a-quote/?package=starter' ) ); ?>" class="eymonk-btn eymonk-btn--outline" style="width:100%;justify-content:center;">
					<?php esc_html_e( 'Get Started', 'eymonk-group' ); ?>
				</a>
			</div>

			<!-- Business (featured) -->
			<div class="eymonk-pricing-card eymonk-pricing-card--featured">
				<div class="eymonk-pricing__badge"><?php esc_html_e( 'Most Popular', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__name"><?php esc_html_e( 'Business', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__desc"><?php esc_html_e( 'Ideal for growing SMEs that want results.', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__price">
					<span class="eymonk-pricing__currency">£</span>
					<span class="eymonk-pricing__amount">999</span>
					<span class="eymonk-pricing__period"><?php esc_html_e( '+ VAT', 'eymonk-group' ); ?></span>
				</div>
				<ul class="eymonk-pricing__features">
					<li><span class="check">✓</span> <?php esc_html_e( 'Up to 10 pages', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Mobile responsive', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Contact & quote forms', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Full on-page SEO', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Blog setup', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'WooCommerce shop', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( '30-day support', 'eymonk-group' ); ?></li>
					<li><span class="cross">✕</span> <?php esc_html_e( 'Ongoing maintenance', 'eymonk-group' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/get-a-quote/?package=business' ) ); ?>" class="eymonk-btn eymonk-btn--primary" style="width:100%;justify-content:center;">
					<?php esc_html_e( 'Get Started', 'eymonk-group' ); ?>
				</a>
			</div>

			<!-- Premium -->
			<div class="eymonk-pricing-card">
				<div class="eymonk-pricing__name"><?php esc_html_e( 'Premium', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__desc"><?php esc_html_e( 'Complete solution with ongoing maintenance.', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__price">
					<span class="eymonk-pricing__currency">£</span>
					<span class="eymonk-pricing__amount">1,999</span>
					<span class="eymonk-pricing__period"><?php esc_html_e( '+ VAT', 'eymonk-group' ); ?></span>
				</div>
				<ul class="eymonk-pricing__features">
					<li><span class="check">✓</span> <?php esc_html_e( 'Unlimited pages', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Custom design', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Advanced SEO', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'WooCommerce + payment gateway', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Blog & content strategy', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Speed optimisation', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( '90-day support', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Monthly maintenance plan', 'eymonk-group' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/get-a-quote/?package=premium' ) ); ?>" class="eymonk-btn eymonk-btn--outline" style="width:100%;justify-content:center;">
					<?php esc_html_e( 'Get Started', 'eymonk-group' ); ?>
				</a>
			</div>

		</div>

		<p style="text-align:center;margin-top:var(--space-8);font-size:var(--fs-sm);color:var(--colour-text-light);">
			<?php esc_html_e( 'All prices exclude VAT. Custom enterprise projects also available. ', 'eymonk-group' ); ?>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact us to discuss.', 'eymonk-group' ); ?></a>
		</p>
	</div>
</section>

<!-- ===== CTA ===== -->
<section class="eymonk-section eymonk-section--bg-dark eymonk-text-center">
	<div class="eymonk-container">
		<h2 style="color:#fff;margin-bottom:var(--space-4);"><?php esc_html_e( 'Let\'s Build Your New Website', 'eymonk-group' ); ?></h2>
		<p style="color:rgba(255,255,255,0.75);font-size:var(--fs-md);max-width:52ch;margin:0 auto var(--space-8);">
			<?php esc_html_e( 'Book a free 30-minute discovery call. No commitment, no pressure — just honest advice about what your website should do.', 'eymonk-group' ); ?>
		</p>
		<div class="eymonk-cta-group" style="justify-content:center;">
			<a href="<?php echo esc_url( home_url( '/get-a-quote/?service=website' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
				<?php esc_html_e( 'Get a Free Website Quote', 'eymonk-group' ); ?>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
