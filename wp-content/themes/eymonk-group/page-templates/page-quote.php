<?php
/**
 * Template Name: Get a Quote
 * Template Post Type: page
 *
 * @package eymonk-group
 */

get_header();

// Process form submission
$submitted  = false;
$form_error = '';

if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['eymonk_quote_nonce'] ) ) {
	if ( wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['eymonk_quote_nonce'] ) ), 'eymonk_quote_form' ) ) {

		$name    = sanitize_text_field( wp_unslash( $_POST['eymonk_name']    ?? '' ) );
		$email   = sanitize_email( wp_unslash( $_POST['eymonk_email']        ?? '' ) );
		$phone   = sanitize_text_field( wp_unslash( $_POST['eymonk_phone']   ?? '' ) );
		$company = sanitize_text_field( wp_unslash( $_POST['eymonk_company'] ?? '' ) );
		$service = sanitize_text_field( wp_unslash( $_POST['eymonk_service'] ?? '' ) );
		$budget  = sanitize_text_field( wp_unslash( $_POST['eymonk_budget']  ?? '' ) );
		$message = sanitize_textarea_field( wp_unslash( $_POST['eymonk_message'] ?? '' ) );

		if ( ! $name || ! is_email( $email ) || ! $message ) {
			$form_error = __( 'Please fill in all required fields with valid information.', 'eymonk-group' );
		} else {
			$to      = get_option( 'admin_email' );
			$subject = sprintf( __( 'New Quote Request from %s — EYMONK GROUP', 'eymonk-group' ), $name );
			$body    = sprintf(
				"%s\n\n%s: %s\n%s: %s\n%s: %s\n%s: %s\n%s: %s\n%s: %s\n\n%s:\n%s",
				__( 'You have received a new quote request:', 'eymonk-group' ),
				__( 'Name',    'eymonk-group' ), $name,
				__( 'Email',   'eymonk-group' ), $email,
				__( 'Phone',   'eymonk-group' ), $phone,
				__( 'Company', 'eymonk-group' ), $company,
				__( 'Service', 'eymonk-group' ), $service,
				__( 'Budget',  'eymonk-group' ), $budget,
				__( 'Message', 'eymonk-group' ), $message
			);
			$headers = [
				'Content-Type: text/plain; charset=UTF-8',
				'Reply-To: ' . $name . ' <' . $email . '>',
			];

			if ( wp_mail( $to, $subject, $body, $headers ) ) {
				$submitted = true;
			} else {
				$form_error = __( 'Sorry, there was a problem sending your message. Please try calling us directly.', 'eymonk-group' );
			}
		}
	}
}
?>

<!-- ===== PAGE HERO ===== -->
<section class="eymonk-page-hero" aria-labelledby="quote-hero-heading">
	<div class="eymonk-container">
		<nav class="eymonk-breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'eymonk-group' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'eymonk-group' ); ?></a>
			<span>/</span>
			<span><?php esc_html_e( 'Get a Quote', 'eymonk-group' ); ?></span>
		</nav>
		<h1 id="quote-hero-heading"><?php esc_html_e( 'Get a Free Quote', 'eymonk-group' ); ?></h1>
		<p><?php esc_html_e( 'Tell us about your project and we\'ll send you a detailed, no-obligation quote within 2 business hours.', 'eymonk-group' ); ?></p>
	</div>
</section>

<!-- ===== FORM + SIDEBAR ===== -->
<section class="eymonk-section">
	<div class="eymonk-container">
		<div style="display:grid;grid-template-columns:1fr;gap:var(--space-12);align-items:start;">

			<!-- FORM -->
			<div>
				<?php if ( $submitted ) : ?>
					<div class="eymonk-form" style="text-align:center;" role="alert">
						<div style="font-size:4rem;margin-bottom:var(--space-4);" aria-hidden="true">🎉</div>
						<h2><?php esc_html_e( 'Quote Request Received!', 'eymonk-group' ); ?></h2>
						<p style="font-size:var(--fs-md);margin-top:var(--space-4);">
							<?php esc_html_e( 'Thanks for getting in touch. A member of our team will contact you within 2 business hours with your personalised quote.', 'eymonk-group' ); ?>
						</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="eymonk-btn eymonk-btn--primary" style="margin-top:var(--space-8);">
							<?php esc_html_e( '← Back to Home', 'eymonk-group' ); ?>
						</a>
					</div>
				<?php else : ?>

					<?php if ( $form_error ) : ?>
						<div class="eymonk-form-error" role="alert" style="background:#fef2f2;border:1px solid #fca5a5;border-radius:var(--radius-md);padding:var(--space-4);margin-bottom:var(--space-6);color:#dc2626;font-size:var(--fs-sm);">
							⚠️ <?php echo esc_html( $form_error ); ?>
						</div>
					<?php endif; ?>

					<form
						method="post"
						action="<?php echo esc_url( get_permalink() ); ?>"
						class="eymonk-form"
						novalidate
						aria-labelledby="quote-form-heading"
					>
						<?php wp_nonce_field( 'eymonk_quote_form', 'eymonk_quote_nonce' ); ?>

						<h2 id="quote-form-heading" style="margin-bottom:var(--space-8);font-size:var(--fs-2xl);">
							<?php esc_html_e( 'Tell Us About Your Project', 'eymonk-group' ); ?>
						</h2>

						<!-- Row 1: Name + Email -->
						<div class="eymonk-form__row eymonk-form__row--2">
							<div class="eymonk-form__group">
								<label for="eymonk_name" class="eymonk-form__label">
									<?php esc_html_e( 'Your Name', 'eymonk-group' ); ?> <span aria-hidden="true">*</span>
								</label>
								<input
									type="text"
									id="eymonk_name"
									name="eymonk_name"
									class="eymonk-form__input"
									placeholder="<?php esc_attr_e( 'e.g. Jane Smith', 'eymonk-group' ); ?>"
									required
									autocomplete="name"
									value="<?php echo isset( $_POST['eymonk_name'] ) ? esc_attr( sanitize_text_field( wp_unslash( $_POST['eymonk_name'] ) ) ) : ''; ?>"
								>
							</div>
							<div class="eymonk-form__group">
								<label for="eymonk_email" class="eymonk-form__label">
									<?php esc_html_e( 'Email Address', 'eymonk-group' ); ?> <span aria-hidden="true">*</span>
								</label>
								<input
									type="email"
									id="eymonk_email"
									name="eymonk_email"
									class="eymonk-form__input"
									placeholder="<?php esc_attr_e( 'jane@company.co.uk', 'eymonk-group' ); ?>"
									required
									autocomplete="email"
									value="<?php echo isset( $_POST['eymonk_email'] ) ? esc_attr( sanitize_email( wp_unslash( $_POST['eymonk_email'] ) ) ) : ''; ?>"
								>
							</div>
						</div>

						<!-- Row 2: Phone + Company -->
						<div class="eymonk-form__row eymonk-form__row--2">
							<div class="eymonk-form__group">
								<label for="eymonk_phone" class="eymonk-form__label">
									<?php esc_html_e( 'Phone Number', 'eymonk-group' ); ?>
								</label>
								<input
									type="tel"
									id="eymonk_phone"
									name="eymonk_phone"
									class="eymonk-form__input"
									placeholder="<?php esc_attr_e( 'e.g. 07700 900000', 'eymonk-group' ); ?>"
									autocomplete="tel"
									value="<?php echo isset( $_POST['eymonk_phone'] ) ? esc_attr( sanitize_text_field( wp_unslash( $_POST['eymonk_phone'] ) ) ) : ''; ?>"
								>
							</div>
							<div class="eymonk-form__group">
								<label for="eymonk_company" class="eymonk-form__label">
									<?php esc_html_e( 'Company / Business Name', 'eymonk-group' ); ?>
								</label>
								<input
									type="text"
									id="eymonk_company"
									name="eymonk_company"
									class="eymonk-form__input"
									placeholder="<?php esc_attr_e( 'Your business name', 'eymonk-group' ); ?>"
									autocomplete="organization"
									value="<?php echo isset( $_POST['eymonk_company'] ) ? esc_attr( sanitize_text_field( wp_unslash( $_POST['eymonk_company'] ) ) ) : ''; ?>"
								>
							</div>
						</div>

						<!-- Row 3: Service + Budget -->
						<div class="eymonk-form__row eymonk-form__row--2">
							<div class="eymonk-form__group">
								<label for="eymonk_service" class="eymonk-form__label">
									<?php esc_html_e( 'Service Required', 'eymonk-group' ); ?> <span aria-hidden="true">*</span>
								</label>
								<select id="eymonk_service" name="eymonk_service" class="eymonk-form__select" required>
									<option value=""><?php esc_html_e( 'Select a service…', 'eymonk-group' ); ?></option>
									<optgroup label="<?php esc_attr_e( 'Printing', 'eymonk-group' ); ?>">
										<option value="business-cards" <?php selected( isset( $_POST['eymonk_service'] ) && 'business-cards' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Business Cards', 'eymonk-group' ); ?></option>
										<option value="flyers" <?php selected( isset( $_POST['eymonk_service'] ) && 'flyers' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Flyers & Leaflets', 'eymonk-group' ); ?></option>
										<option value="stickers" <?php selected( isset( $_POST['eymonk_service'] ) && 'stickers' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Stickers & Labels', 'eymonk-group' ); ?></option>
										<option value="banners" <?php selected( isset( $_POST['eymonk_service'] ) && 'banners' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Banners & Signage', 'eymonk-group' ); ?></option>
										<option value="other-print" <?php selected( isset( $_POST['eymonk_service'] ) && 'other-print' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Other Print Product', 'eymonk-group' ); ?></option>
									</optgroup>
									<optgroup label="<?php esc_attr_e( 'Website Design', 'eymonk-group' ); ?>">
										<option value="brochure-site" <?php selected( isset( $_POST['eymonk_service'] ) && 'brochure-site' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Brochure / Business Website', 'eymonk-group' ); ?></option>
										<option value="ecommerce" <?php selected( isset( $_POST['eymonk_service'] ) && 'ecommerce' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'E-Commerce Website', 'eymonk-group' ); ?></option>
										<option value="landing-page" <?php selected( isset( $_POST['eymonk_service'] ) && 'landing-page' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Landing Page', 'eymonk-group' ); ?></option>
										<option value="website-redesign" <?php selected( isset( $_POST['eymonk_service'] ) && 'website-redesign' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Website Redesign', 'eymonk-group' ); ?></option>
									</optgroup>
									<optgroup label="<?php esc_attr_e( 'Digital Marketing', 'eymonk-group' ); ?>">
										<option value="seo" <?php selected( isset( $_POST['eymonk_service'] ) && 'seo' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'SEO', 'eymonk-group' ); ?></option>
										<option value="google-ads" <?php selected( isset( $_POST['eymonk_service'] ) && 'google-ads' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Google Ads / PPC', 'eymonk-group' ); ?></option>
										<option value="social-media" <?php selected( isset( $_POST['eymonk_service'] ) && 'social-media' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Social Media Marketing', 'eymonk-group' ); ?></option>
										<option value="email-marketing" <?php selected( isset( $_POST['eymonk_service'] ) && 'email-marketing' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Email Marketing', 'eymonk-group' ); ?></option>
									</optgroup>
									<option value="bundle" <?php selected( isset( $_POST['eymonk_service'] ) && 'bundle' === $_POST['eymonk_service'] ); ?>><?php esc_html_e( 'Full Bundle (Print + Web + Marketing)', 'eymonk-group' ); ?></option>
								</select>
							</div>
							<div class="eymonk-form__group">
								<label for="eymonk_budget" class="eymonk-form__label">
									<?php esc_html_e( 'Approximate Budget', 'eymonk-group' ); ?>
								</label>
								<select id="eymonk_budget" name="eymonk_budget" class="eymonk-form__select">
									<option value=""><?php esc_html_e( 'Select a budget…', 'eymonk-group' ); ?></option>
									<option value="under-500" <?php selected( isset( $_POST['eymonk_budget'] ) && 'under-500' === $_POST['eymonk_budget'] ); ?>><?php esc_html_e( 'Under £500', 'eymonk-group' ); ?></option>
									<option value="500-1000" <?php selected( isset( $_POST['eymonk_budget'] ) && '500-1000' === $_POST['eymonk_budget'] ); ?>><?php esc_html_e( '£500 – £1,000', 'eymonk-group' ); ?></option>
									<option value="1000-2500" <?php selected( isset( $_POST['eymonk_budget'] ) && '1000-2500' === $_POST['eymonk_budget'] ); ?>><?php esc_html_e( '£1,000 – £2,500', 'eymonk-group' ); ?></option>
									<option value="2500-5000" <?php selected( isset( $_POST['eymonk_budget'] ) && '2500-5000' === $_POST['eymonk_budget'] ); ?>><?php esc_html_e( '£2,500 – £5,000', 'eymonk-group' ); ?></option>
									<option value="over-5000" <?php selected( isset( $_POST['eymonk_budget'] ) && 'over-5000' === $_POST['eymonk_budget'] ); ?>><?php esc_html_e( 'Over £5,000', 'eymonk-group' ); ?></option>
									<option value="not-sure" <?php selected( isset( $_POST['eymonk_budget'] ) && 'not-sure' === $_POST['eymonk_budget'] ); ?>><?php esc_html_e( 'Not sure yet', 'eymonk-group' ); ?></option>
								</select>
							</div>
						</div>

						<!-- Message -->
						<div class="eymonk-form__group" style="margin-bottom:var(--space-5);">
							<label for="eymonk_message" class="eymonk-form__label">
								<?php esc_html_e( 'Project Details', 'eymonk-group' ); ?> <span aria-hidden="true">*</span>
							</label>
							<textarea
								id="eymonk_message"
								name="eymonk_message"
								class="eymonk-form__textarea"
								placeholder="<?php esc_attr_e( 'Tell us about your project — what do you need, any specific requirements, quantities, deadlines…', 'eymonk-group' ); ?>"
								required
								rows="6"
							><?php echo isset( $_POST['eymonk_message'] ) ? esc_textarea( sanitize_textarea_field( wp_unslash( $_POST['eymonk_message'] ) ) ) : ''; ?></textarea>
						</div>

						<!-- GDPR consent -->
						<div class="eymonk-form__group" style="margin-bottom:var(--space-8);">
							<label class="eymonk-form__checkbox">
								<input type="checkbox" name="eymonk_consent" value="1" required>
								<span class="eymonk-form__checkbox-label">
									<?php
									printf(
										/* translators: 1: privacy policy link */
										esc_html__( 'I agree to my data being used to process this enquiry in line with the %s.', 'eymonk-group' ),
										'<a href="' . esc_url( home_url( '/privacy-policy/' ) ) . '" target="_blank">' . esc_html__( 'Privacy Policy', 'eymonk-group' ) . '</a>'
									);
									?>
								</span>
							</label>
						</div>

						<button type="submit" class="eymonk-btn eymonk-btn--primary eymonk-btn--lg" style="width:100%;justify-content:center;">
							<?php esc_html_e( '🚀 Send My Quote Request', 'eymonk-group' ); ?>
						</button>

					</form>

				<?php endif; ?>
			</div>

			<!-- SIDEBAR: contact info + why choose -->
			<aside aria-label="<?php esc_attr_e( 'Contact Information', 'eymonk-group' ); ?>">

				<div class="eymonk-card" style="margin-bottom:var(--space-6);">
					<h3 style="font-size:var(--fs-xl);margin-bottom:var(--space-6);"><?php esc_html_e( 'Or Call / Email Us Directly', 'eymonk-group' ); ?></h3>
					<div class="eymonk-feature-list">
						<div class="eymonk-feature-item">
							<div class="eymonk-feature-item__icon" aria-hidden="true">📞</div>
							<div>
								<div class="eymonk-feature-item__title"><?php esc_html_e( 'Phone', 'eymonk-group' ); ?></div>
								<div class="eymonk-feature-item__desc"><?php eymonk_phone_link(); ?></div>
							</div>
						</div>
						<div class="eymonk-feature-item">
							<div class="eymonk-feature-item__icon" aria-hidden="true">✉️</div>
							<div>
								<div class="eymonk-feature-item__title"><?php esc_html_e( 'Email', 'eymonk-group' ); ?></div>
								<div class="eymonk-feature-item__desc"><?php eymonk_email_link(); ?></div>
							</div>
						</div>
						<div class="eymonk-feature-item">
							<div class="eymonk-feature-item__icon" aria-hidden="true">🕐</div>
							<div>
								<div class="eymonk-feature-item__title"><?php esc_html_e( 'Working Hours', 'eymonk-group' ); ?></div>
								<div class="eymonk-feature-item__desc"><?php esc_html_e( 'Mon–Fri, 9am–6pm GMT', 'eymonk-group' ); ?></div>
							</div>
						</div>
					</div>
				</div>

				<div class="eymonk-card" style="background:var(--colour-off-white);">
					<h4 style="margin-bottom:var(--space-5);"><?php esc_html_e( 'What Happens Next?', 'eymonk-group' ); ?></h4>
					<ol style="display:flex;flex-direction:column;gap:var(--space-4);list-style:none;">
						<?php
						$steps = [
							[ 'n' => '1', 'text' => __( 'We review your request and prepare your personalised quote.', 'eymonk-group' ) ],
							[ 'n' => '2', 'text' => __( 'You receive your quote by email within 2 business hours.', 'eymonk-group' ) ],
							[ 'n' => '3', 'text' => __( 'We schedule a 15-minute call to discuss any questions.', 'eymonk-group' ) ],
							[ 'n' => '4', 'text' => __( 'Once you\'re happy, we get started immediately.', 'eymonk-group' ) ],
						];
						foreach ( $steps as $s ) : ?>
							<li style="display:flex;align-items:flex-start;gap:var(--space-3);">
								<span style="display:flex;align-items:center;justify-content:center;width:28px;height:28px;border-radius:50%;background:var(--colour-primary);color:#fff;font-size:var(--fs-sm);font-weight:700;flex-shrink:0;" aria-hidden="true"><?php echo esc_html( $s['n'] ); ?></span>
								<span style="font-size:var(--fs-sm);color:var(--colour-text-light);"><?php echo esc_html( $s['text'] ); ?></span>
							</li>
						<?php endforeach; ?>
					</ol>
				</div>

			</aside>

		</div>
	</div>
</section>

<?php get_footer(); ?>
