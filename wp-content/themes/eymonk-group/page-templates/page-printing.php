<?php
/**
 * Template Name: Printing Services
 * Template Post Type: page
 *
 * @package eymonk-group
 */

get_header();
?>

<!-- ===== PAGE HERO ===== -->
<section class="eymonk-page-hero" aria-labelledby="page-hero-heading">
	<div class="eymonk-container">
		<nav class="eymonk-breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'eymonk-group' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'eymonk-group' ); ?></a>
			<span aria-hidden="true">/</span>
			<span><?php esc_html_e( 'Printing Services', 'eymonk-group' ); ?></span>
		</nav>
		<h1 id="page-hero-heading"><?php esc_html_e( 'Professional Printing Services for UK Businesses', 'eymonk-group' ); ?></h1>
		<p><?php esc_html_e( 'High-quality, fast-turnaround print products designed to make your brand stand out. Order online with UK-wide delivery.', 'eymonk-group' ); ?></p>
		<div class="eymonk-cta-group" style="justify-content:center;margin-top:var(--space-8);">
			<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
				<?php esc_html_e( 'Get a Printing Quote', 'eymonk-group' ); ?>
			</a>
			<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="eymonk-btn eymonk-btn--secondary eymonk-btn--lg">
				<?php esc_html_e( 'Shop Print Products', 'eymonk-group' ); ?>
			</a>
		</div>
	</div>
</section>

<!-- ===== TRUST BAR ===== -->
<section class="eymonk-section eymonk-section--sm eymonk-section--bg-light">
	<div class="eymonk-container">
		<div class="eymonk-trust-badges">
			<?php
			$badges = [
				[ 'icon' => '⚡', 'strong' => __( 'Next-Day Delivery', 'eymonk-group' ),   'span' => __( 'Express option available', 'eymonk-group' ) ],
				[ 'icon' => '🎨', 'strong' => __( 'Free Design Help',   'eymonk-group' ),   'span' => __( 'Templates included', 'eymonk-group' ) ],
				[ 'icon' => '💷', 'strong' => __( 'Competitive Prices', 'eymonk-group' ),   'span' => __( 'No hidden fees', 'eymonk-group' ) ],
				[ 'icon' => '♻️', 'strong' => __( 'Eco Printing',       'eymonk-group' ),   'span' => __( 'Sustainable materials', 'eymonk-group' ) ],
				[ 'icon' => '✅', 'strong' => __( 'Quality Guaranteed', 'eymonk-group' ),   'span' => __( 'Free reprint if not right', 'eymonk-group' ) ],
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

<!-- ===== PRODUCTS GRID ===== -->
<section class="eymonk-section" aria-labelledby="products-heading">
	<div class="eymonk-container">

		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Our Print Range', 'eymonk-group' ); ?></span>
			<h2 id="products-heading"><?php esc_html_e( 'What We Print', 'eymonk-group' ); ?></h2>
			<p><?php esc_html_e( 'From business essentials to large-format graphics, we offer a comprehensive range of print products for UK businesses of all sizes.', 'eymonk-group' ); ?></p>
		</header>

		<div class="eymonk-grid eymonk-grid--3">
			<?php
			$products = [
				[
					'icon'  => '🗂️',
					'title' => __( 'Business Cards', 'eymonk-group' ),
					'desc'  => __( 'Make a lasting first impression with premium business cards. Choose from single, double-sided, matt or gloss laminate, spot UV, or luxury silk finishes.', 'eymonk-group' ),
					'specs' => [
						__( '85mm × 55mm standard UK size', 'eymonk-group' ),
						__( '350gsm – 700gsm card stock', 'eymonk-group' ),
						__( 'From 250 to 10,000 cards', 'eymonk-group' ),
						__( 'From £19.99 + VAT', 'eymonk-group' ),
					],
				],
				[
					'icon'  => '📄',
					'title' => __( 'Flyers & Leaflets', 'eymonk-group' ),
					'desc'  => __( 'Promote your business, event, or offer with eye-catching flyers. Available in A3, A4, A5, A6, and DL formats — single or double-sided.', 'eymonk-group' ),
					'specs' => [
						__( 'A3, A4, A5, A6, DL sizes', 'eymonk-group' ),
						__( '130gsm – 350gsm paper', 'eymonk-group' ),
						__( 'From 100 to 50,000 copies', 'eymonk-group' ),
						__( 'From £12.99 + VAT', 'eymonk-group' ),
					],
				],
				[
					'icon'  => '🏷️',
					'title' => __( 'Stickers & Labels', 'eymonk-group' ),
					'desc'  => __( 'Custom stickers and labels for products, packaging, events and promotions. Waterproof and outdoor-grade options available.', 'eymonk-group' ),
					'specs' => [
						__( 'Any shape or size', 'eymonk-group' ),
						__( 'Indoor & outdoor-grade vinyl', 'eymonk-group' ),
						__( 'From 100 to 10,000 pieces', 'eymonk-group' ),
						__( 'From £14.99 + VAT', 'eymonk-group' ),
					],
				],
				[
					'icon'  => '🏳️',
					'title' => __( 'Banners & Signage', 'eymonk-group' ),
					'desc'  => __( 'Large-format PVC banners, roller banners and printed signage for events, retail, outdoor advertising and exhibitions.', 'eymonk-group' ),
					'specs' => [
						__( 'PVC banner, roller banner, foam board', 'eymonk-group' ),
						__( 'UV-resistant outdoor printing', 'eymonk-group' ),
						__( 'Custom sizes up to 6m wide', 'eymonk-group' ),
						__( 'From £39.99 + VAT', 'eymonk-group' ),
					],
				],
				[
					'icon'  => '📋',
					'title' => __( 'Letterheads & Stationery', 'eymonk-group' ),
					'desc'  => __( 'Branded business stationery including letterheads, compliment slips, and notepads. Reinforce your brand in every communication.', 'eymonk-group' ),
					'specs' => [
						__( 'A4 letterheads & A5 comp slips', 'eymonk-group' ),
						__( '80gsm – 120gsm uncoated stock', 'eymonk-group' ),
						__( 'From 250 to 5,000 sheets', 'eymonk-group' ),
						__( 'From £24.99 + VAT', 'eymonk-group' ),
					],
				],
				[
					'icon'  => '📦',
					'title' => __( 'Branded Packaging', 'eymonk-group' ),
					'desc'  => __( 'Custom-printed boxes, bags, tissue paper and tape to create an unforgettable unboxing experience for your customers.', 'eymonk-group' ),
					'specs' => [
						__( 'Custom box sizes', 'eymonk-group' ),
						__( 'Kraft, white, and bespoke finishes', 'eymonk-group' ),
						__( 'MOQ from 50 units', 'eymonk-group' ),
						__( 'From £49.99 + VAT', 'eymonk-group' ),
					],
				],
			];
			foreach ( $products as $product ) : ?>
				<article class="eymonk-card">
					<div class="eymonk-card__icon" aria-hidden="true"><?php echo esc_html( $product['icon'] ); ?></div>
					<h3 class="eymonk-card__title"><?php echo esc_html( $product['title'] ); ?></h3>
					<p class="eymonk-card__body"><?php echo esc_html( $product['desc'] ); ?></p>
					<ul class="eymonk-card__list" aria-label="<?php echo esc_attr( $product['title'] ) . ' ' . esc_attr__( 'specifications', 'eymonk-group' ); ?>">
						<?php foreach ( $product['specs'] as $spec ) : ?>
							<li><?php echo esc_html( $spec ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a href="<?php echo esc_url( home_url( '/get-a-quote/?product=' . urlencode( $product['title'] ) ) ); ?>" class="eymonk-btn eymonk-btn--outline">
						<?php esc_html_e( 'Get a Quote', 'eymonk-group' ); ?>
					</a>
				</article>
			<?php endforeach; ?>
		</div>

	</div>
</section>

<!-- ===== HOW TO ORDER ===== -->
<section class="eymonk-section eymonk-section--bg-light" aria-labelledby="order-heading">
	<div class="eymonk-container">
		<header class="eymonk-section-header eymonk-text-center">
			<span class="eymonk-label"><?php esc_html_e( 'Simple Process', 'eymonk-group' ); ?></span>
			<h2 id="order-heading"><?php esc_html_e( 'How to Order Your Print', 'eymonk-group' ); ?></h2>
		</header>
		<div class="eymonk-grid eymonk-grid--4">
			<?php
			$steps = [
				[ 'num' => '1', 'icon' => '🛒', 'title' => __( 'Choose Your Product',  'eymonk-group' ), 'desc' => __( 'Browse our shop or request a custom quote for something bespoke.', 'eymonk-group' ) ],
				[ 'num' => '2', 'icon' => '🎨', 'title' => __( 'Upload Your Artwork',  'eymonk-group' ), 'desc' => __( 'Send us your print-ready file or ask our designers to create something for you.', 'eymonk-group' ) ],
				[ 'num' => '3', 'icon' => '✅', 'title' => __( 'Approve Your Proof',   'eymonk-group' ), 'desc' => __( 'We send you a digital proof within 4 hours. Give the green light and we go to print.', 'eymonk-group' ) ],
				[ 'num' => '4', 'icon' => '📦', 'title' => __( 'Receive Your Order',   'eymonk-group' ), 'desc' => __( 'Delivered to your UK address in 2–5 business days, or next-day with our express service.', 'eymonk-group' ) ],
			];
			foreach ( $steps as $s ) : ?>
				<div style="text-align:center;padding:var(--space-4);">
					<div style="display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;border-radius:var(--radius-full);background:var(--colour-primary);color:#fff;font-weight:800;font-size:var(--fs-lg);margin-bottom:var(--space-4);" aria-hidden="true"><?php echo esc_html( $s['num'] ); ?></div>
					<h3 style="font-size:var(--fs-lg);margin-bottom:var(--space-2);"><?php echo esc_html( $s['title'] ); ?></h3>
					<p style="font-size:var(--fs-sm);"><?php echo esc_html( $s['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== PRINTING SPECS / ARTWORK GUIDELINES ===== -->
<section class="eymonk-section" aria-labelledby="specs-heading">
	<div class="eymonk-container">
		<div style="display:grid;grid-template-columns:1fr;gap:var(--space-12);">
			<div>
				<span class="eymonk-label"><?php esc_html_e( 'Artwork Guidelines', 'eymonk-group' ); ?></span>
				<h2 id="specs-heading" style="margin-top:var(--space-3);margin-bottom:var(--space-6);"><?php esc_html_e( 'Setting Up Your Files for Print', 'eymonk-group' ); ?></h2>
				<div class="eymonk-feature-list">
					<?php
					$specs = [
						[ 'icon' => '📐', 'title' => __( 'Bleed & Safe Area',    'eymonk-group' ), 'desc' => __( 'Add 3mm bleed around all edges. Keep text and logos at least 5mm from the trim line.', 'eymonk-group' ) ],
						[ 'icon' => '🎨', 'title' => __( 'Colour Mode',           'eymonk-group' ), 'desc' => __( 'Use CMYK colour mode. RGB colours may shift when printed. Convert all images before submitting.', 'eymonk-group' ) ],
						[ 'icon' => '🖼️', 'title' => __( 'Image Resolution',      'eymonk-group' ), 'desc' => __( 'All images must be at least 300 DPI at actual print size for sharp, professional results.', 'eymonk-group' ) ],
						[ 'icon' => '📄', 'title' => __( 'Accepted File Types',   'eymonk-group' ), 'desc' => __( 'We accept PDF, AI, PSD, TIFF, and EPS. Please flatten all layers and embed all fonts.', 'eymonk-group' ) ],
					];
					foreach ( $specs as $spec ) : ?>
						<div class="eymonk-feature-item">
							<div class="eymonk-feature-item__icon" aria-hidden="true"><?php echo esc_html( $spec['icon'] ); ?></div>
							<div>
								<div class="eymonk-feature-item__title"><?php echo esc_html( $spec['title'] ); ?></div>
								<div class="eymonk-feature-item__desc"><?php echo esc_html( $spec['desc'] ); ?></div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="eymonk-cta-group" style="margin-top:var(--space-8);">
					<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--primary">
						<?php esc_html_e( 'Request a Printing Quote', 'eymonk-group' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="eymonk-btn eymonk-btn--outline">
						<?php esc_html_e( 'Ask a Question', 'eymonk-group' ); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===== CTA ===== -->
<section class="eymonk-section eymonk-section--bg-dark eymonk-text-center">
	<div class="eymonk-container">
		<h2 style="color:#fff;margin-bottom:var(--space-4);"><?php esc_html_e( 'Ready to Place Your Print Order?', 'eymonk-group' ); ?></h2>
		<p style="color:rgba(255,255,255,0.75);font-size:var(--fs-md);max-width:52ch;margin:0 auto var(--space-8);">
			<?php esc_html_e( 'Get a free, instant quote online or speak to our friendly team. We\'re here Mon–Fri, 9am–6pm.', 'eymonk-group' ); ?>
		</p>
		<div class="eymonk-cta-group" style="justify-content:center;">
			<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
				<?php esc_html_e( 'Get a Free Quote', 'eymonk-group' ); ?>
			</a>
			<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="eymonk-btn eymonk-btn--secondary eymonk-btn--lg">
				<?php esc_html_e( 'Shop Online', 'eymonk-group' ); ?>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
