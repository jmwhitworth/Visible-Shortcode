<?php if ($shortcode = $attributes['shortcode'] ?? ''): ?>
	<?php echo wp_kses_post( do_shortcode( $shortcode ) ); ?>
<?php endif; ?>
