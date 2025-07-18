<?php
// This file is generated. Do not modify it manually.
return array(
	'visible-shortcode' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'visible-shortcode/visible-shortcode',
		'version' => '1.0.0',
		'title' => 'Visible Shortcode',
		'category' => 'widgets',
		'icon' => 'shortcode',
		'description' => 'Shortcodes with visible rendering in the block editor.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'keywords' => array(
			'code',
			'shortcode',
			'visible',
			'dynamic',
			'preview'
		),
		'textdomain' => 'visible-shortcode',
		'editorScript' => 'file:./index.js',
		'render' => 'file:./render.php',
		'attributes' => array(
			'shortcode' => array(
				'type' => 'string',
				'default' => ''
			)
		)
	)
);
