<?php
/**
 * Single post template
 *
 * @package eymonk-group
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Post hero -->
	<header class="eymonk-page-hero" aria-labelledby="post-heading">
		<div class="eymonk-container">
			<nav class="eymonk-breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'eymonk-group' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'eymonk-group' ); ?></a>
				<span>/</span>
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog', 'eymonk-group' ); ?></a>
				<span>/</span>
				<span><?php the_title(); ?></span>
			</nav>
			<?php the_title( '<h1 id="post-heading">', '</h1>' ); ?>
			<div style="display:flex;align-items:center;gap:var(--space-4);flex-wrap:wrap;margin-top:var(--space-4);color:rgba(255,255,255,0.7);font-size:var(--fs-sm);">
				<span>By <?php the_author(); ?></span>
				<span>·</span>
				<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_date( 'd F Y' ); ?></time>
				<span>·</span>
				<span><?php echo esc_html( (string) ceil( str_word_count( get_the_content() ) / 200 ) ); ?> <?php esc_html_e( 'min read', 'eymonk-group' ); ?></span>
			</div>
		</div>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div style="max-height:500px;overflow:hidden;">
			<?php the_post_thumbnail( 'eymonk-hero', [ 'style' => 'width:100%;height:100%;object-fit:cover;', 'alt' => get_the_title() ] ); ?>
		</div>
	<?php endif; ?>

	<div class="eymonk-container eymonk-section">
		<div style="max-width:72ch;margin:0 auto;" class="eymonk-prose">
			<?php the_content(); ?>
		</div>

		<?php
		// Tags
		$tags = get_the_tags();
		if ( $tags ) : ?>
			<div style="margin-top:var(--space-8);display:flex;flex-wrap:wrap;gap:var(--space-2);max-width:72ch;margin-left:auto;margin-right:auto;">
				<?php foreach ( $tags as $tag ) : ?>
					<a href="<?php echo esc_url( get_tag_link( $tag ) ); ?>" style="display:inline-block;background:var(--colour-light-grey);border-radius:var(--radius-full);padding:var(--space-1) var(--space-3);font-size:var(--fs-xs);font-weight:600;color:var(--colour-primary);text-decoration:none;">
						#<?php echo esc_html( $tag->name ); ?>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<!-- Post navigation -->
		<nav style="margin-top:var(--space-12);display:flex;justify-content:space-between;gap:var(--space-6);flex-wrap:wrap;border-top:1px solid var(--colour-border);padding-top:var(--space-8);" aria-label="<?php esc_attr_e( 'Post navigation', 'eymonk-group' ); ?>">
			<?php
			$prev = get_previous_post();
			$next = get_next_post();
			if ( $prev ) : ?>
				<a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" style="font-size:var(--fs-sm);">
					← <?php echo esc_html( get_the_title( $prev ) ); ?>
				</a>
			<?php endif; ?>
			<?php if ( $next ) : ?>
				<a href="<?php echo esc_url( get_permalink( $next ) ); ?>" style="font-size:var(--fs-sm);margin-left:auto;">
					<?php echo esc_html( get_the_title( $next ) ); ?> →
				</a>
			<?php endif; ?>
		</nav>

	</div>

</article>

<?php endwhile; ?>

<!-- CTA after post -->
<section class="eymonk-section eymonk-section--bg-dark eymonk-text-center">
	<div class="eymonk-container">
		<h2 style="color:#fff;margin-bottom:var(--space-4);"><?php esc_html_e( 'Ready to Grow Your Business?', 'eymonk-group' ); ?></h2>
		<p style="color:rgba(255,255,255,0.75);font-size:var(--fs-md);max-width:52ch;margin:0 auto var(--space-8);">
			<?php esc_html_e( 'Get a free, no-obligation quote for printing, website design, or digital marketing today.', 'eymonk-group' ); ?>
		</p>
		<a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg">
			<?php esc_html_e( 'Get a Free Quote', 'eymonk-group' ); ?>
		</a>
	</div>
</section>

<?php get_footer(); ?>
