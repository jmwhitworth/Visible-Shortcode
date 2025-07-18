<?php if ($shortcode = $attributes['shortcode'] ?? ''): ?>
	<?php echo \do_shortcode( $shortcode ); ?>
<?php endif; ?>
