<?php
/**
 * Script CDN / CSP guidance shown during first-run onboarding (no controls).
 *
 * @package    Audioeye
 * @subpackage Audioeye/admin/partials
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ae_cdn_onboarding_allowed = array(
	'code' => array(),
);
?>

<h2><?php esc_html_e( '2. Optional: add our script host to your CSP allowlist', 'audioeye' ); ?></h2>
<div class="ae-indent-content ae-cdn-onboarding-instructions">
	<p><?php echo wp_kses( __( 'If your site uses a Content Security Policy, add <code>https://wsv3cdn.audioeye-services.com</code> to your <code>script-src</code> (and any other directives your policy needs for third-party scripts).', 'audioeye' ), $ae_cdn_onboarding_allowed ); ?></p>
</div>
