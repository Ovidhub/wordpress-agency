<?php
/**
 * WooCommerce single-product template
 *
 * @package eymonk-group
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<!-- Breadcrumb -->
	<div class="eymonk-section eymonk-section--sm" style="padding-bottom:0;">
		<div class="eymonk-container">
			<nav class="eymonk-breadcrumb" style="justify-content:flex-start;color:var(--colour-text-light);" aria-label="<?php esc_attr_e( 'Breadcrumb', 'eymonk-group' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:var(--colour-text-light);"><?php esc_html_e( 'Home', 'eymonk-group' ); ?></a>
				<span>/</span>
				<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" style="color:var(--colour-text-light);"><?php esc_html_e( 'Shop', 'eymonk-group' ); ?></a>
				<span>/</span>
				<span><?php the_title(); ?></span>
			</nav>
		</div>
	</div>

	<?php woocommerce_content(); ?>

<?php endwhile; ?>

<!-- CTA after product -->
<section class="eymonk-section eymonk-section--bg-light eymonk-text-center">
	<div class="eymonk-container">
		<h2><?php esc_html_e( 'Need a Custom Quote?', 'eymonk-group' ); ?></h2>
		<p style="max-width:52ch;margin:var(--space-4) auto var(--space-8);">
			<?php esc_html_e( 'For large quantities, special finishes, or custom sizes — contact us for a bespoke quote.', 'eymonk-group' ); ?>
		</p>
		<a href="<?php echo esc_url( home_url( '/get-a-quote/?service=printing' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
			<?php esc_html_e( 'Request a Custom Quote', 'eymonk-group' ); ?>
		</a>
	</div>
</section>

<?php get_footer(); ?>
