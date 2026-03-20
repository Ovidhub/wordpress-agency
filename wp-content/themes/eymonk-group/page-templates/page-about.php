<?php
/**
 * Template Name: About Us
 * Template Post Type: page
 *
 * @package eymonk-group
 */

get_header();
?>

<!-- ===== PAGE HERO ===== -->
<section class="eymonk-page-hero" aria-labelledby="about-hero-heading">
	<div class="eymonk-container">
		<nav class="eymonk-breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'eymonk-group' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'eymonk-group' ); ?></a>
			<span>/</span>
			<span><?php esc_html_e( 'About Us', 'eymonk-group' ); ?></span>
		</nav>
		<h1 id="about-hero-heading"><?php esc_html_e( 'About EYMONK GROUP LTD', 'eymonk-group' ); ?></h1>
		<p><?php esc_html_e( 'A UK-based agency passionate about helping small and medium businesses thrive through great design, quality print, and smart digital marketing.', 'eymonk-group' ); ?></p>
	</div>
</section>

<!-- ===== OUR STORY ===== -->
<section class="eymonk-section" aria-labelledby="story-heading">
	<div class="eymonk-container">
		<div style="max-width:72ch;margin:0 auto;text-align:center;">
			<span class="eymonk-label"><?php esc_html_e( 'Our Story', 'eymonk-group' ); ?></span>
			<h2 id="story-heading" style="margin-top:var(--space-3);margin-bottom:var(--space-6);"><?php esc_html_e( 'Built for UK Businesses, By People Who Understand Business', 'eymonk-group' ); ?></h2>
			<p style="font-size:var(--fs-md);margin-bottom:var(--space-6);">
				<?php esc_html_e( 'EYMONK GROUP LTD was founded with a simple mission: to give small and medium UK businesses access to the same quality of printing, web design, and digital marketing that big corporations enjoy — without the big-agency price tag.', 'eymonk-group' ); ?>
			</p>
			<p>
				<?php esc_html_e( 'We\'ve seen too many brilliant UK businesses fail to reach their potential simply because they couldn\'t find an affordable, reliable partner to help them look professional online and in print. That\'s why we created EYMONK GROUP — a one-stop shop for everything a growing business needs to stand out.', 'eymonk-group' ); ?>
			</p>
		</div>
	</div>
</section>

<!-- ===== VALUES ===== -->
<section class="eymonk-section eymonk-section--bg-light" aria-labelledby="values-heading">
	<div class="eymonk-container">
		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'What Drives Us', 'eymonk-group' ); ?></span>
			<h2 id="values-heading"><?php esc_html_e( 'Our Core Values', 'eymonk-group' ); ?></h2>
		</header>
		<div class="eymonk-grid eymonk-grid--4">
			<?php
			$values = [
				[ 'icon' => '🎯', 'title' => __( 'Results First',   'eymonk-group' ), 'desc' => __( 'Everything we do is driven by real outcomes. If it doesn\'t move the needle for your business, we don\'t do it.', 'eymonk-group' ) ],
				[ 'icon' => '🤝', 'title' => __( 'Honest Advice',   'eymonk-group' ), 'desc' => __( 'We tell you what you need to hear, not what you want to hear. You\'ll always get straight-talking recommendations.', 'eymonk-group' ) ],
				[ 'icon' => '⚡', 'title' => __( 'Speed & Quality', 'eymonk-group' ), 'desc' => __( 'Fast doesn\'t mean rushed. We have processes that ensure every deliverable meets our exacting quality standards.', 'eymonk-group' ) ],
				[ 'icon' => '🌱', 'title' => __( 'Long-Term Growth','eymonk-group' ), 'desc' => __( 'We build strategies designed to compound over time — not quick wins that disappear. We\'re in it for the long run with you.', 'eymonk-group' ) ],
			];
			foreach ( $values as $v ) : ?>
				<div class="eymonk-card eymonk-service-card">
					<div class="eymonk-card__icon" aria-hidden="true"><?php echo esc_html( $v['icon'] ); ?></div>
					<h3 class="eymonk-card__title"><?php echo esc_html( $v['title'] ); ?></h3>
					<p class="eymonk-card__body"><?php echo esc_html( $v['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== STATS ===== -->
<section class="eymonk-section eymonk-section--bg-dark">
	<div class="eymonk-container">
		<div class="eymonk-stats">
			<?php
			$stats = [
				[ 'num' => '500+',  'label' => __( 'Clients Served',          'eymonk-group' ) ],
				[ 'num' => '1,200+','label' => __( 'Projects Delivered',       'eymonk-group' ) ],
				[ 'num' => '98%',   'label' => __( 'Client Satisfaction Rate', 'eymonk-group' ) ],
				[ 'num' => '7+',    'label' => __( 'Years of Experience',      'eymonk-group' ) ],
				[ 'num' => '£2M+',  'label' => __( 'Client Revenue Generated', 'eymonk-group' ) ],
			];
			foreach ( $stats as $s ) : ?>
				<div class="eymonk-stat">
					<span class="eymonk-stat__number" style="color:#fff;"><?php echo esc_html( $s['num'] ); ?></span>
					<span class="eymonk-stat__label" style="color:rgba(255,255,255,.7);"><?php echo esc_html( $s['label'] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== WHY UK BUSINESSES CHOOSE US ===== -->
<section class="eymonk-section" aria-labelledby="why-us-heading">
	<div class="eymonk-container">
		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Why Work With Us', 'eymonk-group' ); ?></span>
			<h2 id="why-us-heading"><?php esc_html_e( 'The EYMONK GROUP Difference', 'eymonk-group' ); ?></h2>
			<p><?php esc_html_e( 'Here\'s why hundreds of UK businesses choose us over larger agencies and cheaper online alternatives.', 'eymonk-group' ); ?></p>
		</header>
		<div class="eymonk-grid eymonk-grid--2">
			<?php
			$reasons = [
				[ 'icon' => '🇬🇧', 'title' => __( 'Truly UK-Based',            'eymonk-group' ), 'desc' => __( 'We\'re registered in England and all our work is done in the UK. You\'ll always speak to someone local who understands your market.', 'eymonk-group' ) ],
				[ 'icon' => '🏆', 'title' => __( 'Award-Winning Quality',       'eymonk-group' ), 'desc' => __( 'Our design and print quality rivals the best agencies in the country — at a fraction of the cost. We don\'t cut corners.', 'eymonk-group' ) ],
				[ 'icon' => '📊', 'title' => __( 'Transparent Reporting',       'eymonk-group' ), 'desc' => __( 'Monthly reports with real numbers, clear explanations, and actionable insights. No smoke and mirrors — just honest data.', 'eymonk-group' ) ],
				[ 'icon' => '💬', 'title' => __( 'Dedicated Account Manager',   'eymonk-group' ), 'desc' => __( 'You\'ll have a named contact who knows your business inside-out. Direct phone and email access — no ticketing systems.', 'eymonk-group' ) ],
				[ 'icon' => '🔓', 'title' => __( 'No Long-Term Contracts',      'eymonk-group' ), 'desc' => __( 'Our marketing retainers are month-to-month. We earn your business every single month — and that keeps us on our toes.', 'eymonk-group' ) ],
				[ 'icon' => '🧩', 'title' => __( 'Everything Under One Roof',   'eymonk-group' ), 'desc' => __( 'Print, web and marketing all handled by one team who know your brand. Better consistency, less hassle, lower total cost.', 'eymonk-group' ) ],
			];
			foreach ( $reasons as $r ) : ?>
				<div class="eymonk-feature-item" style="padding:var(--space-6);background:var(--colour-off-white);border-radius:var(--radius-lg);">
					<div class="eymonk-feature-item__icon" aria-hidden="true"><?php echo esc_html( $r['icon'] ); ?></div>
					<div>
						<div class="eymonk-feature-item__title"><?php echo esc_html( $r['title'] ); ?></div>
						<div class="eymonk-feature-item__desc"><?php echo esc_html( $r['desc'] ); ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== CTA ===== -->
<section class="eymonk-section eymonk-section--bg-dark eymonk-text-center">
	<div class="eymonk-container">
		<h2 style="color:#fff;margin-bottom:var(--space-4);"><?php esc_html_e( 'Let\'s Work Together', 'eymonk-group' ); ?></h2>
		<p style="color:rgba(255,255,255,0.75);font-size:var(--fs-md);max-width:52ch;margin:0 auto var(--space-8);">
			<?php esc_html_e( 'Whether you need a print run, a new website, or a complete marketing overhaul — we\'d love to hear about your project.', 'eymonk-group' ); ?>
		</p>
		<div class="eymonk-cta-group" style="justify-content:center;">
			<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
				<?php esc_html_e( 'Start a Project', 'eymonk-group' ); ?>
			</a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="eymonk-btn eymonk-btn--secondary eymonk-btn--lg">
				<?php esc_html_e( 'Get in Touch', 'eymonk-group' ); ?>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
