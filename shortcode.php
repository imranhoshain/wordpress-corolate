<?php

function features_shortcode( $content = null, $atts = array()) {
	$atts = shortcode_atts( array(
		'id' => 'value',
	), $atts, 'shortcode-id' );

	// do shortcode actions here
}
add_shortcode( 'features', 'features_shortcode' );
