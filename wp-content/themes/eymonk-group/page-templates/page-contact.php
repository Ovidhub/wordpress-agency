<?php
/**
 * Template Name: Contact Us
 * Template Post Type: page
 *
 * @package eymonk-group
 */

get_header();
?>

<!-- ===== PAGE HERO ===== -->
<section class="eymonk-page-hero" aria-labelledby="contact-hero-heading">
	<div class="eymonk-container">
		<nav class="eymonk-breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'eymonk-group' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'eymonk-group' ); ?></a>
			<span>/</span>
			<span><?php esc_html_e( 'Contact', 'eymonk-group' ); ?></span>
		</nav>
		<h1 id="contact-hero-heading"><?php esc_html_e( 'Contact EYMONK GROUP', 'eymonk-group' ); ?></h1>
		<p><?php esc_html_e( 'Got a question or ready to start a project? We\'d love to hear from you. Our UK team responds within 2 business hours.', 'eymonk-group' ); ?></p>
	</div>
</section>

<!-- ===== CONTACT GRID ===== -->
<section class="eymonk-section">
	<div class="eymonk-container">
		<div style="display:grid;grid-template-columns:1fr;gap:var(--space-12);">

			<!-- Contact details -->
			<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:var(--space-6);">
				<?php
				$contacts = [
					[
						'icon'  => '📞',
						'title' => __( 'Call Us', 'eymonk-group' ),
						'lines' => [ eymonk_get( 'eymonk_phone', '+44 20 0000 0000' ) ],
						'note'  => __( 'Mon–Fri, 9am–6pm GMT', 'eymonk-group' ),
					],
					[
						'icon'  => '✉️',
						'title' => __( 'Email Us', 'eymonk-group' ),
						'lines' => [ eymonk_get( 'eymonk_email', 'hello@eymonkgroup.co.uk' ) ],
						'note'  => __( 'Response within 2 hours', 'eymonk-group' ),
					],
					[
						'icon'  => '📍',
						'title' => __( 'Find Us', 'eymonk-group' ),
						'lines' => [
							eymonk_get( 'eymonk_address', '123 Business Street' ),
							eymonk_get( 'eymonk_city', 'London' ) . ', ' . eymonk_get( 'eymonk_postcode', 'EC1A 1BB' ),
							__( 'United Kingdom', 'eymonk-group' ),
						],
						'note'  => '',
					],
				];
				foreach ( $contacts as $c ) : ?>
					<div class="eymonk-card" style="text-align:center;">
						<div style="font-size:2.5rem;margin-bottom:var(--space-4);" aria-hidden="true"><?php echo esc_html( $c['icon'] ); ?></div>
						<h3 style="font-size:var(--fs-lg);margin-bottom:var(--space-3);"><?php echo esc_html( $c['title'] ); ?></h3>
						<?php foreach ( $c['lines'] as $line ) : ?>
							<p style="font-size:var(--fs-sm);color:var(--colour-text);font-weight:500;"><?php echo esc_html( $line ); ?></p>
						<?php endforeach; ?>
						<?php if ( $c['note'] ) : ?>
							<p style="font-size:var(--fs-xs);color:var(--colour-text-light);margin-top:var(--space-2);"><?php echo esc_html( $c['note'] ); ?></p>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>

			<!-- Quick contact prompt -->
			<div class="eymonk-text-center">
				<h2><?php esc_html_e( 'Start a Project With Us', 'eymonk-group' ); ?></h2>
				<p style="max-width:52ch;margin:var(--space-4) auto var(--space-8);">
					<?php esc_html_e( 'The fastest way to get started is to complete our quote request form. We\'ll come back to you with a detailed proposal within 2 business hours.', 'eymonk-group' ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--xl">
					<?php esc_html_e( 'Get a Free Quote →', 'eymonk-group' ); ?>
				</a>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
