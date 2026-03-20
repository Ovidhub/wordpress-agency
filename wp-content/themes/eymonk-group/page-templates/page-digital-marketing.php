<?php
/**
 * Template Name: Digital Marketing
 * Template Post Type: page
 *
 * @package eymonk-group
 */

get_header();
?>

<!-- ===== PAGE HERO ===== -->
<section class="eymonk-page-hero" aria-labelledby="dm-hero-heading">
	<div class="eymonk-container">
		<nav class="eymonk-breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'eymonk-group' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'eymonk-group' ); ?></a>
			<span>/</span>
			<span><?php esc_html_e( 'Digital Marketing', 'eymonk-group' ); ?></span>
		</nav>
		<h1 id="dm-hero-heading"><?php esc_html_e( 'Digital Marketing Services for UK Small Businesses', 'eymonk-group' ); ?></h1>
		<p><?php esc_html_e( 'Data-driven SEO, Google Ads, and social media marketing that grows your visibility, generates quality leads, and delivers measurable ROI.', 'eymonk-group' ); ?></p>
		<div class="eymonk-cta-group" style="justify-content:center;margin-top:var(--space-8);">
			<a href="<?php echo esc_url( home_url( '/get-a-quote/?service=marketing' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
				<?php esc_html_e( 'Get a Marketing Quote', 'eymonk-group' ); ?>
			</a>
			<a href="#packages" class="eymonk-btn eymonk-btn--secondary eymonk-btn--lg">
				<?php esc_html_e( 'View Packages', 'eymonk-group' ); ?>
			</a>
		</div>
	</div>
</section>

<!-- ===== STATS BAR ===== -->
<section class="eymonk-section eymonk-section--sm" style="background:var(--colour-primary);color:#fff;">
	<div class="eymonk-container">
		<div class="eymonk-stats">
			<div class="eymonk-stat">
				<span class="eymonk-stat__number" style="color:#fff;">3×</span>
				<span class="eymonk-stat__label" style="color:rgba(255,255,255,.7);"><?php esc_html_e( 'Average enquiry increase', 'eymonk-group' ); ?></span>
			</div>
			<div class="eymonk-stat">
				<span class="eymonk-stat__number" style="color:#fff;">140%</span>
				<span class="eymonk-stat__label" style="color:rgba(255,255,255,.7);"><?php esc_html_e( 'Avg organic traffic growth', 'eymonk-group' ); ?></span>
			</div>
			<div class="eymonk-stat">
				<span class="eymonk-stat__number" style="color:#fff;">4.8</span>
				<span class="eymonk-stat__label" style="color:rgba(255,255,255,.7);"><?php esc_html_e( 'Average ROAS (Google Ads)', 'eymonk-group' ); ?></span>
			</div>
			<div class="eymonk-stat">
				<span class="eymonk-stat__number" style="color:#fff;">60+</span>
				<span class="eymonk-stat__label" style="color:rgba(255,255,255,.7);"><?php esc_html_e( 'Active marketing clients', 'eymonk-group' ); ?></span>
			</div>
		</div>
	</div>
</section>

<!-- ===== SERVICES ===== -->
<section class="eymonk-section" aria-labelledby="dm-services-heading">
	<div class="eymonk-container">
		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Our Marketing Services', 'eymonk-group' ); ?></span>
			<h2 id="dm-services-heading"><?php esc_html_e( 'Full-Stack Digital Marketing for UK SMEs', 'eymonk-group' ); ?></h2>
			<p><?php esc_html_e( 'We combine organic growth strategies with paid performance marketing to ensure your business is found by the right people at the right time.', 'eymonk-group' ); ?></p>
		</header>

		<div class="eymonk-grid eymonk-grid--2">
			<?php
			$services = [
				[
					'icon'  => '🔍',
					'title' => __( 'Search Engine Optimisation (SEO)', 'eymonk-group' ),
					'desc'  => __( 'Rank higher on Google for keywords your customers are searching. Our UK-focused SEO strategies combine technical excellence with compelling content to drive sustainable organic growth.', 'eymonk-group' ),
					'items' => [
						__( 'Technical SEO audit & fixes', 'eymonk-group' ),
						__( 'UK keyword research & strategy', 'eymonk-group' ),
						__( 'On-page & off-page optimisation', 'eymonk-group' ),
						__( 'Local SEO & Google Business Profile', 'eymonk-group' ),
						__( 'Monthly performance reporting', 'eymonk-group' ),
					],
				],
				[
					'icon'  => '💰',
					'title' => __( 'Google Ads & PPC Management', 'eymonk-group' ),
					'desc'  => __( 'Reach customers who are actively searching for your products or services right now. We manage your Google Ads budget to maximise every pound spent.', 'eymonk-group' ),
					'items' => [
						__( 'Search, Display & Shopping campaigns', 'eymonk-group' ),
						__( 'Conversion tracking setup', 'eymonk-group' ),
						__( 'A/B ad copy testing', 'eymonk-group' ),
						__( 'Landing page optimisation', 'eymonk-group' ),
						__( 'Weekly spend & performance reports', 'eymonk-group' ),
					],
				],
				[
					'icon'  => '📲',
					'title' => __( 'Social Media Marketing', 'eymonk-group' ),
					'desc'  => __( 'Build a loyal audience, increase brand awareness, and drive traffic with strategic social media management across Facebook, Instagram, and LinkedIn.', 'eymonk-group' ),
					'items' => [
						__( 'Content creation & scheduling', 'eymonk-group' ),
						__( 'Facebook & Instagram Ads', 'eymonk-group' ),
						__( 'LinkedIn B2B campaigns', 'eymonk-group' ),
						__( 'Community management', 'eymonk-group' ),
						__( 'Monthly analytics review', 'eymonk-group' ),
					],
				],
				[
					'icon'  => '✉️',
					'title' => __( 'Email Marketing', 'eymonk-group' ),
					'desc'  => __( 'Nurture your leads and retain your customers with targeted email campaigns. Email marketing delivers the highest ROI of any digital channel — and we make it effortless.', 'eymonk-group' ),
					'items' => [
						__( 'Campaign design & copywriting', 'eymonk-group' ),
						__( 'List building & segmentation', 'eymonk-group' ),
						__( 'Automated welcome & nurture sequences', 'eymonk-group' ),
						__( 'A/B subject line testing', 'eymonk-group' ),
						__( 'Open rate & conversion reporting', 'eymonk-group' ),
					],
				],
			];
			foreach ( $services as $s ) : ?>
				<article class="eymonk-card" style="display:flex;gap:var(--space-6);">
					<div class="eymonk-card__icon" style="flex-shrink:0;" aria-hidden="true"><?php echo esc_html( $s['icon'] ); ?></div>
					<div>
						<h3 class="eymonk-card__title"><?php echo esc_html( $s['title'] ); ?></h3>
						<p class="eymonk-card__body"><?php echo esc_html( $s['desc'] ); ?></p>
						<ul class="eymonk-card__list">
							<?php foreach ( $s['items'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== PRICING PACKAGES ===== -->
<section id="packages" class="eymonk-section eymonk-section--bg-light" aria-labelledby="dm-pricing-heading">
	<div class="eymonk-container">
		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Monthly Retainers', 'eymonk-group' ); ?></span>
			<h2 id="dm-pricing-heading"><?php esc_html_e( 'Simple, Transparent Pricing', 'eymonk-group' ); ?></h2>
			<p><?php esc_html_e( 'No long-term lock-in. Month-to-month retainers that scale with your business.', 'eymonk-group' ); ?></p>
		</header>

		<div class="eymonk-grid eymonk-grid--3">

			<!-- Growth -->
			<div class="eymonk-pricing-card">
				<div class="eymonk-pricing__name"><?php esc_html_e( 'Growth', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__desc"><?php esc_html_e( 'For businesses just starting out with digital marketing.', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__price">
					<span class="eymonk-pricing__currency">£</span>
					<span class="eymonk-pricing__amount">299</span>
					<span class="eymonk-pricing__period">/<?php esc_html_e( 'month + VAT', 'eymonk-group' ); ?></span>
				</div>
				<ul class="eymonk-pricing__features">
					<li><span class="check">✓</span> <?php esc_html_e( 'SEO basics', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Google Business Profile', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( '4 social posts/month', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Monthly report', 'eymonk-group' ); ?></li>
					<li><span class="cross">✕</span> <?php esc_html_e( 'Google Ads management', 'eymonk-group' ); ?></li>
					<li><span class="cross">✕</span> <?php esc_html_e( 'Email marketing', 'eymonk-group' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/get-a-quote/?package=growth' ) ); ?>" class="eymonk-btn eymonk-btn--outline" style="width:100%;justify-content:center;">
					<?php esc_html_e( 'Get Started', 'eymonk-group' ); ?>
				</a>
			</div>

			<!-- Pro (featured) -->
			<div class="eymonk-pricing-card eymonk-pricing-card--featured">
				<div class="eymonk-pricing__badge"><?php esc_html_e( 'Best Value', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__name"><?php esc_html_e( 'Pro', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__desc"><?php esc_html_e( 'The complete package for serious growth.', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__price">
					<span class="eymonk-pricing__currency">£</span>
					<span class="eymonk-pricing__amount">599</span>
					<span class="eymonk-pricing__period">/<?php esc_html_e( 'month + VAT', 'eymonk-group' ); ?></span>
				</div>
				<ul class="eymonk-pricing__features">
					<li><span class="check">✓</span> <?php esc_html_e( 'Full SEO strategy', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Google Ads management', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( '12 social posts/month', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Email newsletter', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Monthly strategy call', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Detailed monthly report', 'eymonk-group' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/get-a-quote/?package=pro' ) ); ?>" class="eymonk-btn eymonk-btn--primary" style="width:100%;justify-content:center;">
					<?php esc_html_e( 'Get Started', 'eymonk-group' ); ?>
				</a>
			</div>

			<!-- Enterprise -->
			<div class="eymonk-pricing-card">
				<div class="eymonk-pricing__name"><?php esc_html_e( 'Enterprise', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__desc"><?php esc_html_e( 'Custom campaigns for ambitious UK businesses.', 'eymonk-group' ); ?></div>
				<div class="eymonk-pricing__price">
					<span class="eymonk-pricing__currency">£</span>
					<span class="eymonk-pricing__amount">999</span>
					<span class="eymonk-pricing__period">+/<?php esc_html_e( 'month + VAT', 'eymonk-group' ); ?></span>
				</div>
				<ul class="eymonk-pricing__features">
					<li><span class="check">✓</span> <?php esc_html_e( 'Everything in Pro', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Dedicated account manager', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Multi-channel ad campaigns', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Content marketing & PR', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'Weekly reporting', 'eymonk-group' ); ?></li>
					<li><span class="check">✓</span> <?php esc_html_e( 'CRO & landing page testing', 'eymonk-group' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/get-a-quote/?package=enterprise' ) ); ?>" class="eymonk-btn eymonk-btn--outline" style="width:100%;justify-content:center;">
					<?php esc_html_e( 'Contact Us', 'eymonk-group' ); ?>
				</a>
			</div>

		</div>
	</div>
</section>

<!-- ===== CTA ===== -->
<section class="eymonk-section eymonk-section--bg-dark eymonk-text-center">
	<div class="eymonk-container">
		<h2 style="color:#fff;margin-bottom:var(--space-4);"><?php esc_html_e( 'Ready to Grow Your Online Presence?', 'eymonk-group' ); ?></h2>
		<p style="color:rgba(255,255,255,0.75);font-size:var(--fs-md);max-width:52ch;margin:0 auto var(--space-8);">
			<?php esc_html_e( 'Get a free digital marketing audit worth £200. We\'ll show you exactly where your business is missing out online — and how to fix it.', 'eymonk-group' ); ?>
		</p>
		<div class="eymonk-cta-group" style="justify-content:center;">
			<a href="<?php echo esc_url( home_url( '/get-a-quote/?service=marketing' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
				<?php esc_html_e( 'Claim Your Free Audit', 'eymonk-group' ); ?>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
