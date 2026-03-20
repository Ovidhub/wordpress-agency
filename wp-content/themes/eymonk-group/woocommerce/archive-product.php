<?php
/**
 * WooCommerce archive-product (Shop) template
 *
 * @package eymonk-group
 */

get_header();
?>

<!-- ===== PAGE HERO ===== -->
<section class="eymonk-page-hero" aria-labelledby="shop-hero-heading">
	<div class="eymonk-container">
		<nav class="eymonk-breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'eymonk-group' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'eymonk-group' ); ?></a>
			<span>/</span>
			<span><?php esc_html_e( 'Print Shop', 'eymonk-group' ); ?></span>
		</nav>
		<h1 id="shop-hero-heading">
			<?php
			if ( is_product_category() ) {
				single_term_title();
			} else {
				esc_html_e( 'Print Shop — Order Online', 'eymonk-group' );
			}
			?>
		</h1>
		<p><?php esc_html_e( 'Browse our full range of print products. Upload your design, choose your options, and get fast UK delivery.', 'eymonk-group' ); ?></p>
	</div>
</section>

<?php woocommerce_content(); ?>

<?php get_footer(); ?>
