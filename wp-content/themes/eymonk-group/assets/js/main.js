/**
 * EYMONK GROUP LTD — Main JavaScript
 * Handles navigation, interactions, and UX enhancements.
 */

( function () {
	'use strict';

	// ─── DOM Ready Helper ──────────────────────────────────────────────────
	function ready( fn ) {
		if ( document.readyState !== 'loading' ) {
			fn();
		} else {
			document.addEventListener( 'DOMContentLoaded', fn );
		}
	}

	// ─── Sticky Header ─────────────────────────────────────────────────────
	function initStickyHeader() {
		const header = document.getElementById( 'masthead' );
		if ( ! header ) return;

		let lastScroll = 0;

		function onScroll() {
			const currentScroll = window.pageYOffset;

			if ( currentScroll > 80 ) {
				header.classList.add( 'is-scrolled' );
			} else {
				header.classList.remove( 'is-scrolled' );
			}

			lastScroll = currentScroll;
		}

		window.addEventListener( 'scroll', onScroll, { passive: true } );
		onScroll();
	}

	// ─── Mobile Navigation ─────────────────────────────────────────────────
	function initMobileNav() {
		const hamburger  = document.querySelector( '.eymonk-hamburger' );
		const mobileNav  = document.getElementById( 'mobile-nav' );
		const overlay    = mobileNav && mobileNav.querySelector( '.eymonk-mobile-nav__overlay' );
		const closeBtn   = mobileNav && mobileNav.querySelector( '.eymonk-mobile-nav__close' );

		if ( ! hamburger || ! mobileNav ) return;

		function openNav() {
			hamburger.classList.add( 'is-open' );
			hamburger.setAttribute( 'aria-expanded', 'true' );
			mobileNav.classList.add( 'is-open' );
			mobileNav.setAttribute( 'aria-hidden', 'false' );
			document.body.style.overflow = 'hidden';

			// Move focus to first link
			const firstLink = mobileNav.querySelector( 'a' );
			if ( firstLink ) firstLink.focus();
		}

		function closeNav() {
			hamburger.classList.remove( 'is-open' );
			hamburger.setAttribute( 'aria-expanded', 'false' );
			mobileNav.classList.remove( 'is-open' );
			mobileNav.setAttribute( 'aria-hidden', 'true' );
			document.body.style.overflow = '';
			hamburger.focus();
		}

		hamburger.addEventListener( 'click', function () {
			if ( mobileNav.classList.contains( 'is-open' ) ) {
				closeNav();
			} else {
				openNav();
			}
		} );

		if ( overlay ) overlay.addEventListener( 'click', closeNav );
		if ( closeBtn ) closeBtn.addEventListener( 'click', closeNav );

		// Close on Escape key
		document.addEventListener( 'keydown', function ( e ) {
			if ( e.key === 'Escape' && mobileNav.classList.contains( 'is-open' ) ) {
				closeNav();
			}
		} );
	}

	// ─── Smooth Scroll ─────────────────────────────────────────────────────
	function initSmoothScroll() {
		document.querySelectorAll( 'a[href^="#"]' ).forEach( function ( anchor ) {
			anchor.addEventListener( 'click', function ( e ) {
				const targetId = this.getAttribute( 'href' ).substring( 1 );
				if ( ! targetId ) return;

				const target = document.getElementById( targetId );
				if ( ! target ) return;

				e.preventDefault();

				const headerHeight = document.getElementById( 'masthead' )
					? document.getElementById( 'masthead' ).offsetHeight
					: 0;

				const top = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 16;

				window.scrollTo( { top, behavior: 'smooth' } );

				// Update focus for accessibility
				target.setAttribute( 'tabindex', '-1' );
				target.focus( { preventScroll: true } );
			} );
		} );
	}

	// ─── Intersection Observer — Fade-in animations ────────────────────────
	function initAnimations() {
		if ( ! ( 'IntersectionObserver' in window ) ) return;

		const elements = document.querySelectorAll(
			'.eymonk-card, .eymonk-stat, .eymonk-testimonial, .eymonk-pricing-card, .eymonk-feature-item'
		);

		const observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						entry.target.style.opacity    = '1';
						entry.target.style.transform  = 'translateY(0)';
						observer.unobserve( entry.target );
					}
				} );
			},
			{ threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
		);

		elements.forEach( function ( el ) {
			el.style.opacity   = '0';
			el.style.transform = 'translateY(16px)';
			el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
			observer.observe( el );
		} );
	}

	// ─── Counter Animation (stats) ─────────────────────────────────────────
	function animateCounter( el, target, duration ) {
		if ( isNaN( target ) ) return; // Skip non-numeric (e.g., "5★")

		let start   = 0;
		const step  = Math.ceil( target / ( duration / 16 ) );
		const timer = setInterval( function () {
			start += step;
			if ( start >= target ) {
				el.textContent = el.dataset.suffix
					? target + el.dataset.suffix
					: target.toLocaleString( 'en-GB' );
				clearInterval( timer );
			} else {
				el.textContent = el.dataset.suffix
					? start + el.dataset.suffix
					: start.toLocaleString( 'en-GB' );
			}
		}, 16 );
	}

	function initCounters() {
		if ( ! ( 'IntersectionObserver' in window ) ) return;

		const stats = document.querySelectorAll( '.eymonk-stat__number[data-target]' );
		if ( ! stats.length ) return;

		const observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						const el     = entry.target;
						const target = parseInt( el.dataset.target, 10 );
						animateCounter( el, target, 1200 );
						observer.unobserve( el );
					}
				} );
			},
			{ threshold: 0.5 }
		);

		stats.forEach( function ( el ) { observer.observe( el ); } );
	}

	// ─── Active nav link highlighting ─────────────────────────────────────
	function initActiveNav() {
		const currentPath = window.location.pathname;

		document.querySelectorAll( '.eymonk-nav__link, .eymonk-mobile-nav__links a' ).forEach( function ( link ) {
			const linkPath = new URL( link.href, window.location.origin ).pathname;

			if ( linkPath === currentPath ) {
				link.classList.add( 'is-active' );
				link.setAttribute( 'aria-current', 'page' );
			}
		} );
	}

	// ─── Form UX enhancements ─────────────────────────────────────────────
	function initForms() {
		// Auto-populate service from URL param
		const urlParams    = new URLSearchParams( window.location.search );
		const serviceParam = urlParams.get( 'service' ) || urlParams.get( 'product' );
		const packageParam = urlParams.get( 'package' );

		const serviceSelect = document.getElementById( 'eymonk_service' );
		if ( serviceSelect && serviceParam ) {
			Array.from( serviceSelect.options ).forEach( function ( opt ) {
				if ( opt.value === serviceParam ) {
					serviceSelect.value = serviceParam;
				}
			} );
		}

		const budgetSelect = document.getElementById( 'eymonk_budget' );
		if ( budgetSelect && packageParam ) {
			const budgetMap = {
				starter: 'under-500',
				business: '1000-2500',
				premium: '2500-5000',
				growth: 'under-500',
				pro: '500-1000',
				enterprise: 'over-5000',
			};
			if ( budgetMap[ packageParam ] ) {
				budgetSelect.value = budgetMap[ packageParam ];
			}
		}

		// Hero quick-quote form → redirect to quote page with service param
		const heroForm = document.querySelector( '.eymonk-hero-form' );
		if ( heroForm ) {
			heroForm.addEventListener( 'submit', function ( e ) {
				const serviceEl = heroForm.querySelector( '[name="service"]' );
				if ( serviceEl && serviceEl.value ) {
					e.preventDefault();
					const quoteUrl = heroForm.getAttribute( 'action' );
					window.location.href = quoteUrl + '?service=' + encodeURIComponent( serviceEl.value );
				}
			} );
		}
	}

	// ─── WooCommerce fragments refresh ────────────────────────────────────
	function initCartUpdate() {
		const cartCount = document.querySelector( '.eymonk-cart-count' );
		if ( ! cartCount ) return;

		// Listen for WooCommerce AJAX complete events
		document.body.addEventListener( 'wc_fragments_loaded', function () {
			const count = parseInt( cartCount.textContent, 10 );
			if ( count > 0 ) {
				cartCount.classList.remove( 'sr-only' );
			}
		} );
	}

	// ─── Initialise ───────────────────────────────────────────────────────
	ready( function () {
		initStickyHeader();
		initMobileNav();
		initSmoothScroll();
		initAnimations();
		initCounters();
		initActiveNav();
		initForms();
		initCartUpdate();
	} );

} )();
