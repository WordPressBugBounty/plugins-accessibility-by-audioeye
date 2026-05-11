<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       www.audioeye.com
 * @since      1.0.0
 *
 * @package    Audioeye
 * @subpackage Audioeye/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Audioeye
 * @subpackage Audioeye/public
 * @author     AudioEye <hhedger@audioeye.com>
 */
class Audioeye_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		$options = get_option( 'audioeye_config', array() );

		if ( ! is_array( $options ) ) {
			return;
		}

		if ( isset( $options['site_hash'] ) && $options['site_hash'] ) {
			$cdn_host    = audioeye_effective_use_wsv3_cdn( $options ) ? AUDIOEYE_CDN_HOST_WSV3 : AUDIOEYE_CDN_HOST_LEGACY;
			$script_src  = 'https://' . $cdn_host . '/aem.js';
			?>
			<script type="text/javascript">!function(){var b=function(){window.__AudioEyeInstallSource="wordpress"; window.__AudioEyeSiteHash="<?php echo esc_js( $options['site_hash'] ) ?>"; var a=document.createElement("script");a.src="<?php echo esc_url( $script_src, array( 'https' ) ) ?>";a.type="text/javascript";a.setAttribute("async","");document.getElementsByTagName("body")[0].appendChild(a)};"complete"!==document.readyState?window.addEventListener?window.addEventListener("load",b):window.attachEvent&&window.attachEvent("onload",b):b()}();</script>
			<?php
		} else {
			return;
		}

	}

}
