<?php
/**
 * Main index template (used as blog and fallback)
 *
 * @package eymonk-group
 */

get_header();
?>

<!-- Blog page hero -->
<section class="eymonk-page-hero" aria-labelledby="blog-page-heading">
	<div class="eymonk-container">
		<h1 id="blog-page-heading">
			<?php
			if ( is_home() && ! is_front_page() ) {
				single_post_title();
			} elseif ( is_search() ) {
				printf(
					/* translators: %s: search query */
					esc_html__( 'Search Results for: %s', 'eymonk-group' ),
					'<span>' . get_search_query() . '</span>'
				);
			} else {
				esc_html_e( 'Blog', 'eymonk-group' );
			}
			?>
		</h1>
		<p><?php esc_html_e( 'Tips, insights and advice for UK small businesses.', 'eymonk-group' ); ?></p>
	</div>
</section>

<main id="main" class="eymonk-container eymonk-section" role="main">

	<?php if ( have_posts() ) : ?>

		<div class="eymonk-grid eymonk-grid--3">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'eymonk-card' ); ?> style="padding:0;overflow:hidden;">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" style="display:block;aspect-ratio:16/9;overflow:hidden;border-radius:var(--radius-xl) var(--radius-xl) 0 0;" tabindex="-1" aria-hidden="true">
							<?php the_post_thumbnail( 'eymonk-card', [ 'style' => 'width:100%;height:100%;object-fit:cover;' ] ); ?>
						</a>
					<?php endif; ?>
					<div style="padding:var(--space-6);">
						<div style="font-size:var(--fs-xs);color:var(--colour-text-light);margin-bottom:var(--space-2);">
							<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_date( 'd M Y' ); ?></time>
							<?php
							$cats = get_the_category();
							if ( $cats ) :
								echo ' &middot; <span>' . esc_html( $cats[0]->name ) . '</span>';
							endif;
							?>
						</div>
						<h2 style="font-size:var(--fs-lg);margin-bottom:var(--space-3);">
							<a href="<?php the_permalink(); ?>" style="color:var(--colour-text);"><?php the_title(); ?></a>
						</h2>
						<p style="font-size:var(--fs-sm);"><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="eymonk-btn eymonk-btn--ghost" style="margin-top:var(--space-4);padding-left:0;">
							<?php esc_html_e( 'Read more →', 'eymonk-group' ); ?>
						</a>
					</div>
				</article>

			<?php endwhile; ?>
		</div>

		<!-- Pagination -->
		<nav class="eymonk-pagination" style="margin-top:var(--space-12);text-align:center;" aria-label="<?php esc_attr_e( 'Posts navigation', 'eymonk-group' ); ?>">
			<?php
			the_posts_pagination( [
				'mid_size'  => 2,
				'prev_text' => esc_html__( '← Previous', 'eymonk-group' ),
				'next_text' => esc_html__( 'Next →', 'eymonk-group' ),
			] );
			?>
		</nav>

	<?php else : ?>

		<div style="text-align:center;padding:var(--space-16) 0;">
			<div style="font-size:4rem;margin-bottom:var(--space-4);" aria-hidden="true">📝</div>
			<h2><?php esc_html_e( 'Nothing Found', 'eymonk-group' ); ?></h2>
			<p><?php esc_html_e( 'No posts found. Check back soon — we\'re always adding new content.', 'eymonk-group' ); ?></p>
		</div>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
