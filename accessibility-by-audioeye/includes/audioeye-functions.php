<?php
/**
 * Shared helpers for AudioEye plugin configuration.
 *
 * @package Audioeye
 * @since 1.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Whether the storefront script should load from wsv3cdn (vs legacy wsmcdn).
 *
 * If the user has never saved a CDN preference, new setups default to WSV3 on.
 * Existing installs that already had a Site ID stored before the preference existed
 * default to legacy CDN until they opt in (explicit save).
 *
 * @param array|null|false $config Value of the audioeye_config option.
 * @return bool
 */
function audioeye_effective_use_wsv3_cdn( $config ) {
	if ( ! is_array( $config ) ) {
		return true;
	}

	if ( array_key_exists( 'use_wsv3_cdn', $config ) ) {
		return (bool) $config['use_wsv3_cdn'];
	}

	if ( ! empty( $config['site_hash'] ) ) {
		return false;
	}

	return true;
}
