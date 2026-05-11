<?php
/**
 * Shared "Script CDN (Advanced)" block (post-activation and active site views).
 *
 * @package    Audioeye
 * @subpackage Audioeye/admin/partials
 *
 * @var bool $use_wsv3_cdn Whether to load aem.js from wsv3cdn.audioeye-services.com.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

static $ae_cdn_panel_instance = 0;
$ae_cdn_panel_instance++;
$ae_cdn_checkbox_id = 'ae-use-wsv3-cdn-' . (string) $ae_cdn_panel_instance;

$ae_cdn_allowed_html = array(
	'code'   => array(),
	'strong' => array(),
);
?>

<div class="ae-cdn-section">
	<h2><?php esc_html_e( 'Script CDN (Advanced)', 'audioeye' ); ?></h2>
	<div class="ae-cdn-section__body">
		<p><?php echo wp_kses( __( '<strong>Action recommended:</strong> We\'re migrating to a new CDN domain. Your site is currently loading <code>aem.js</code> from <code>wsmcdn.audioeye.com</code>, which will eventually be retired as the default.', 'audioeye' ), $ae_cdn_allowed_html ); ?></p>
		<p><?php echo wp_kses( __( 'To prepare, add <code>https://wsv3cdn.audioeye-services.com</code> to your <code>script-src</code> directive (and any other directives your Content Security Policy requires for scripts), then enable the new CDN below. Once enabled, <code>aem.js</code> will load from the new domain.', 'audioeye' ), $ae_cdn_allowed_html ); ?></p>
		<p><?php esc_html_e( 'We\'ll announce the timeline before making the switch the default for all sites.', 'audioeye' ); ?></p>
		<form class="ae-cdn-form" method="post">
			<input type="hidden" name="action" value="audioeye_save_cdn" />
			<input type="hidden" name="use_wsv3_cdn" value="0" />
			<div class="ae-cdn-toggle-row">
				<input type="checkbox" id="<?php echo esc_attr( $ae_cdn_checkbox_id ); ?>" name="use_wsv3_cdn" value="1" <?php checked( $use_wsv3_cdn ); ?> />
				<label for="<?php echo esc_attr( $ae_cdn_checkbox_id ); ?>"><?php echo wp_kses( __( 'Load AudioEye JS script from <code>wsv3cdn.audioeye-services.com</code>', 'audioeye' ), $ae_cdn_allowed_html ); ?></label>
			</div>
			<div class="ae-cdn-form-actions">
				<button type="submit" class="ae-cdn-save-button"><?php esc_html_e( 'Save CDN preference', 'audioeye' ); ?></button>
				<span class="ae-cdn-saved" hidden aria-live="polite"><?php esc_html_e( 'Saved.', 'audioeye' ); ?></span>
			</div>
		</form>
	</div>
</div>
