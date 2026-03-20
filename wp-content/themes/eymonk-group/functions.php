<?php
/**
 * EYMONK GROUP LTD — Theme Functions
 *
 * @package eymonk-group
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ─── Constants ──────────────────────────────────────────────────────────────
define( 'EYMONK_VERSION', '1.0.0' );
define( 'EYMONK_DIR',     get_template_directory() );
define( 'EYMONK_URI',     get_template_directory_uri() );

// ─── Theme Setup ────────────────────────────────────────────────────────────
function eymonk_setup() {
	load_theme_textdomain( 'eymonk-group', EYMONK_DIR . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [
		'search-form', 'comment-form', 'comment-list',
		'gallery', 'caption', 'style', 'script',
	] );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );

	// WooCommerce
	add_theme_support( 'woocommerce', [
		'thumbnail_image_width' => 600,
		'single_image_width'    => 900,
		'product_grid'          => [
			'default_rows'    => 3,
			'min_rows'        => 1,
			'default_columns' => 3,
			'min_columns'     => 1,
			'max_columns'     => 4,
		],
	] );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	// Custom logo
	add_theme_support( 'custom-logo', [
		'height'      => 80,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => [ 'site-title', 'site-description' ],
	] );

	// Image sizes
	add_image_size( 'eymonk-hero',    1920, 800, true );
	add_image_size( 'eymonk-card',    600,  400, true );
	add_image_size( 'eymonk-thumb',   400,  300, true );
	add_image_size( 'eymonk-square',  400,  400, true );

	// Navigation menus
	register_nav_menus( [
		'primary'   => __( 'Primary Navigation', 'eymonk-group' ),
		'footer-1'  => __( 'Footer: Services', 'eymonk-group' ),
		'footer-2'  => __( 'Footer: Company', 'eymonk-group' ),
		'footer-3'  => __( 'Footer: Legal', 'eymonk-group' ),
	] );
}
add_action( 'after_setup_theme', 'eymonk_setup' );

// ─── Content Width ───────────────────────────────────────────────────────────
function eymonk_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eymonk_content_width', 1280 );
}
add_action( 'after_setup_theme', 'eymonk_content_width', 0 );

// ─── Enqueue Scripts & Styles ────────────────────────────────────────────────
function eymonk_scripts() {
	// Google Fonts
	wp_enqueue_style(
		'eymonk-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
		[],
		null
	);

	// Main stylesheet
	wp_enqueue_style(
		'eymonk-style',
		EYMONK_URI . '/style.css',
		[ 'eymonk-fonts' ],
		EYMONK_VERSION
	);

	// Main JS
	wp_enqueue_script(
		'eymonk-main',
		EYMONK_URI . '/assets/js/main.js',
		[],
		EYMONK_VERSION,
		true
	);

	// Pass data to JS
	wp_localize_script( 'eymonk-main', 'eymonkData', [
		'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
		'nonce'     => wp_create_nonce( 'eymonk_nonce' ),
		'siteUrl'   => get_site_url(),
		'cartUrl'   => function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : '',
		'cartCount' => function_exists( 'WC' ) ? WC()->cart->get_cart_contents_count() : 0,
	] );

	// Comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eymonk_scripts' );

// ─── Widgets ─────────────────────────────────────────────────────────────────
function eymonk_widgets_init() {
	$shared = [
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	];

	register_sidebar( array_merge( $shared, [
		'name'        => __( 'Blog Sidebar', 'eymonk-group' ),
		'id'          => 'sidebar-1',
		'description' => __( 'Widgets displayed in the blog sidebar.', 'eymonk-group' ),
	] ) );

	register_sidebar( array_merge( $shared, [
		'name'        => __( 'Shop Sidebar', 'eymonk-group' ),
		'id'          => 'sidebar-shop',
		'description' => __( 'Widgets displayed in the WooCommerce shop sidebar.', 'eymonk-group' ),
	] ) );

	register_sidebar( array_merge( $shared, [
		'name'        => __( 'Footer: Newsletter', 'eymonk-group' ),
		'id'          => 'footer-newsletter',
		'description' => __( 'Newsletter signup widget in footer.', 'eymonk-group' ),
	] ) );
}
add_action( 'widgets_init', 'eymonk_widgets_init' );

// ─── WooCommerce helpers ─────────────────────────────────────────────────────
function eymonk_woo_setup() {
	// Remove default WooCommerce wrappers; theme provides its own
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
	remove_action( 'woocommerce_after_main_content',  'woocommerce_output_content_wrapper_end', 10 );
	remove_action( 'woocommerce_sidebar',             'woocommerce_get_sidebar', 10 );

	add_action( 'woocommerce_before_main_content', 'eymonk_woo_wrapper_start', 10 );
	add_action( 'woocommerce_after_main_content',  'eymonk_woo_wrapper_end',   10 );
}
add_action( 'after_setup_theme', 'eymonk_woo_setup' );

function eymonk_woo_wrapper_start() {
	echo '<main id="main" class="eymonk-woo-main eymonk-container eymonk-section">';
}

function eymonk_woo_wrapper_end() {
	echo '</main>';
}

// Cart fragment for AJAX update
function eymonk_cart_count_fragment( $fragments ) {
	ob_start();
	?>
	<span class="eymonk-cart-count"><?php echo intval( WC()->cart->get_cart_contents_count() ); ?></span>
	<?php
	$fragments['.eymonk-cart-count'] = ob_get_clean();
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'eymonk_cart_count_fragment' );

// ─── SEO helpers ─────────────────────────────────────────────────────────────
/**
 * Output structured data (JSON-LD) for the local business.
 */
function eymonk_schema_local_business() {
	if ( ! is_front_page() ) {
		return;
	}
	$schema = [
		'@context'        => 'https://schema.org',
		'@type'           => 'LocalBusiness',
		'name'            => 'EYMONK GROUP LTD',
		'url'             => home_url(),
		'telephone'       => get_theme_mod( 'eymonk_phone', '+44 20 0000 0000' ),
		'email'           => get_theme_mod( 'eymonk_email', 'hello@eymonkgroup.co.uk' ),
		'description'     => 'UK-based agency offering printing services, website design, and digital marketing for small and medium businesses.',
		'address'         => [
			'@type'           => 'PostalAddress',
			'addressLocality' => get_theme_mod( 'eymonk_city', 'London' ),
			'addressCountry'  => 'GB',
		],
		'areaServed'      => 'United Kingdom',
		'currenciesAccepted' => 'GBP',
		'priceRange'      => '££',
		'sameAs'          => array_filter( [
			get_theme_mod( 'eymonk_facebook', '' ),
			get_theme_mod( 'eymonk_instagram', '' ),
			get_theme_mod( 'eymonk_linkedin', '' ),
			get_theme_mod( 'eymonk_twitter', '' ),
		] ),
	];
	printf(
		'<script type="application/ld+json">%s</script>' . "\n",
		wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT )
	);
}
add_action( 'wp_head', 'eymonk_schema_local_business' );

// ─── Customizer ──────────────────────────────────────────────────────────────
function eymonk_customizer( $wp_customize ) {
	// Panel
	$wp_customize->add_panel( 'eymonk_panel', [
		'title'    => __( 'EYMONK GROUP Settings', 'eymonk-group' ),
		'priority' => 130,
	] );

	// ── Contact Details section ──────────────────────────
	$wp_customize->add_section( 'eymonk_contact', [
		'title'    => __( 'Contact Details', 'eymonk-group' ),
		'panel'    => 'eymonk_panel',
		'priority' => 10,
	] );

	$contact_fields = [
		'eymonk_phone'   => [ 'label' => __( 'Phone Number', 'eymonk-group' ),   'default' => '+44 20 0000 0000' ],
		'eymonk_email'   => [ 'label' => __( 'Email Address', 'eymonk-group' ),  'default' => 'hello@eymonkgroup.co.uk' ],
		'eymonk_address' => [ 'label' => __( 'Street Address', 'eymonk-group' ), 'default' => '123 Business Street' ],
		'eymonk_city'    => [ 'label' => __( 'City', 'eymonk-group' ),            'default' => 'London' ],
		'eymonk_postcode'=> [ 'label' => __( 'Postcode', 'eymonk-group' ),        'default' => 'EC1A 1BB' ],
	];

	foreach ( $contact_fields as $key => $args ) {
		$wp_customize->add_setting( $key, [
			'default'           => $args['default'],
			'sanitize_callback' => 'sanitize_text_field',
		] );
		$wp_customize->add_control( $key, [
			'label'   => $args['label'],
			'section' => 'eymonk_contact',
			'type'    => 'text',
		] );
	}

	// ── Social Media section ──────────────────────────────
	$wp_customize->add_section( 'eymonk_social', [
		'title'    => __( 'Social Media Links', 'eymonk-group' ),
		'panel'    => 'eymonk_panel',
		'priority' => 20,
	] );

	$social_fields = [
		'eymonk_facebook'  => __( 'Facebook URL', 'eymonk-group' ),
		'eymonk_instagram' => __( 'Instagram URL', 'eymonk-group' ),
		'eymonk_linkedin'  => __( 'LinkedIn URL', 'eymonk-group' ),
		'eymonk_twitter'   => __( 'X (Twitter) URL', 'eymonk-group' ),
	];

	foreach ( $social_fields as $key => $label ) {
		$wp_customize->add_setting( $key, [
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		] );
		$wp_customize->add_control( $key, [
			'label'   => $label,
			'section' => 'eymonk_social',
			'type'    => 'url',
		] );
	}

	// ── Hero section ─────────────────────────────────────
	$wp_customize->add_section( 'eymonk_hero', [
		'title'    => __( 'Homepage Hero', 'eymonk-group' ),
		'panel'    => 'eymonk_panel',
		'priority' => 30,
	] );

	$hero_fields = [
		'eymonk_hero_heading' => [
			'label'   => __( 'Hero Heading', 'eymonk-group' ),
			'default' => 'Print. Design. Grow Your Business.',
			'type'    => 'text',
		],
		'eymonk_hero_subheading' => [
			'label'   => __( 'Hero Subheading', 'eymonk-group' ),
			'default' => 'Professional printing, website design and digital marketing for UK businesses — all under one roof.',
			'type'    => 'textarea',
		],
		'eymonk_hero_cta_primary' => [
			'label'   => __( 'Primary CTA Label', 'eymonk-group' ),
			'default' => 'Get a Free Quote',
			'type'    => 'text',
		],
		'eymonk_hero_cta_secondary' => [
			'label'   => __( 'Secondary CTA Label', 'eymonk-group' ),
			'default' => 'View Our Services',
			'type'    => 'text',
		],
	];

	foreach ( $hero_fields as $key => $args ) {
		$wp_customize->add_setting( $key, [
			'default'           => $args['default'],
			'sanitize_callback' => 'sanitize_text_field',
		] );
		$wp_customize->add_control( $key, [
			'label'   => $args['label'],
			'section' => 'eymonk_hero',
			'type'    => $args['type'],
		] );
	}
}
add_action( 'customize_register', 'eymonk_customizer' );

// ─── Helper Functions ─────────────────────────────────────────────────────────

/**
 * Get theme option with fallback.
 */
function eymonk_get( $key, $fallback = '' ) {
	return get_theme_mod( $key, $fallback );
}

/**
 * Echo theme option.
 */
function eymonk_e( $key, $fallback = '' ) {
	echo esc_html( eymonk_get( $key, $fallback ) );
}

/**
 * Output the site's phone number as a tel: link.
 */
function eymonk_phone_link( $label = '' ) {
	$phone = eymonk_get( 'eymonk_phone', '+44 20 0000 0000' );
	$tel   = preg_replace( '/[^+\d]/', '', $phone );
	$label = $label ?: $phone;
	printf( '<a href="tel:%s">%s</a>', esc_attr( $tel ), esc_html( $label ) );
}

/**
 * Output the site's email as a mailto: link.
 */
function eymonk_email_link( $label = '' ) {
	$email = eymonk_get( 'eymonk_email', 'hello@eymonkgroup.co.uk' );
	$label = $label ?: $email;
	printf( '<a href="mailto:%s">%s</a>', esc_attr( $email ), esc_html( $label ) );
}

/**
 * Return an SVG icon by name (inline, so CSS can style it).
 * Kept minimal; a real project would load from a sprite sheet.
 */
function eymonk_icon( $name, $size = 20 ) {
	$icons = [
		'check'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>',
		'arrow-right' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>',
		'phone'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>',
		'mail'     => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
		'location' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>',
		'star'     => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>',
		'cart'     => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>',
		'print'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>',
		'globe'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>',
		'chart'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>',
		'shield'   => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
		'lightning'=> '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
	];

	$path = $icons[ $name ] ?? '';
	return sprintf(
		'<svg xmlns="http://www.w3.org/2000/svg" width="%1$d" height="%1$d" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">%2$s</svg>',
		$size,
		$path
	);
}

/**
 * Render a star rating (1–5).
 */
function eymonk_stars( $count = 5 ) {
	$stars = '';
	for ( $i = 1; $i <= 5; $i++ ) {
		$stars .= ( $i <= $count ) ? '★' : '☆';
	}
	return '<span class="eymonk-stars" aria-label="' . esc_attr( sprintf( _n( '%d star', '%d stars', $count, 'eymonk-group' ), $count ) ) . '">' . $stars . '</span>';
}

// ─── Title tag fallback ───────────────────────────────────────────────────────
function eymonk_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	$title .= get_bloginfo( 'name', 'display' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}
	return $title;
}
add_filter( 'wp_title', 'eymonk_wp_title', 10, 2 );

// ─── Body classes ─────────────────────────────────────────────────────────────
function eymonk_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	if ( is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'has-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'eymonk_body_classes' );

// ─── Excerpt ──────────────────────────────────────────────────────────────────
function eymonk_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'eymonk_excerpt_length', 999 );

function eymonk_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'eymonk_excerpt_more' );

// ─── Security ────────────────────────────────────────────────────────────────
// Remove WordPress version from head
remove_action( 'wp_head', 'wp_generator' );
// Remove unnecessary head links
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
