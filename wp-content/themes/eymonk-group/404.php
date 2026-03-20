<?php
/**
 * 404 Error Page
 *
 * @package eymonk-group
 */

get_header();
?>

<main id="main" class="eymonk-container eymonk-section eymonk-text-center" role="main">

	<div style="max-width:520px;margin:0 auto;padding:var(--space-16) 0;">
		<div style="font-size:6rem;line-height:1;margin-bottom:var(--space-6);" aria-hidden="true">😕</div>
		<h1><?php esc_html_e( '404 — Page Not Found', 'eymonk-group' ); ?></h1>
		<p style="font-size:var(--fs-md);margin:var(--space-4) 0 var(--space-8);">
			<?php esc_html_e( 'Oops! The page you\'re looking for doesn\'t exist or has been moved. Let\'s get you back on track.', 'eymonk-group' ); ?>
		</p>
		<div class="eymonk-cta-group" style="justify-content:center;">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="eymonk-btn eymonk-btn--primary">
				<?php esc_html_e( '← Back to Home', 'eymonk-group' ); ?>
			</a>
			<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--outline">
				<?php esc_html_e( 'Get a Quote', 'eymonk-group' ); ?>
			</a>
		</div>
	</div>

</main>

<?php get_footer(); ?>
