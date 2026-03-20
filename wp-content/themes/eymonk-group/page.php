<?php
/**
 * Generic page template
 *
 * @package eymonk-group
 */

get_header();
?>

<main id="main" class="eymonk-container eymonk-section" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<!-- Page Hero -->
		<header class="eymonk-page-header" style="margin-bottom:var(--space-12);">
			<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
		</header>

		<div class="page-content eymonk-prose">
			<?php
			the_content();
			wp_link_pages( [
				'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'eymonk-group' ) . '">',
				'after'  => '</nav>',
			] );
			?>
		</div>

	<?php endwhile; ?>

</main>

<?php get_footer(); ?>
