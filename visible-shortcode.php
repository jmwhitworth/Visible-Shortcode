<?php
/**
 * Plugin Name:       Visible Shortcode
 * Description:       Shortcodes with visible rendering in the block editor.
 * Version:           1.0.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Jack Whitworth
 * Author URI:        https://jackwhitworth.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       visible-shortcode
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function create_block_visible_shortcode_block_init() {
	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
		return;
	}

	if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
		wp_register_block_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
	}

	$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
	foreach ( array_keys( $manifest_data ) as $block_type ) {
		register_block_type( __DIR__ . "/build/{$block_type}", array(
			'render_callback' => function( $block_attributes, $content ) use ( $block_type ) {
				ob_start();
				$attributes = $block_attributes;
				extract( $attributes );
				require __DIR__ . "/build/{$block_type}/render.php";
				return ob_get_clean();
			},
		) );
	}
}
add_action( 'init', 'create_block_visible_shortcode_block_init' );
