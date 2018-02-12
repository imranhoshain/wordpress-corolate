<?php


// Hooks your functions into the correct filters
function corolate_tinymce_btn() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'corolate_tinymce_plugin' );
		add_filter( 'mce_buttons', 'corolate_tinymce_register_btn' );
	}
}
add_action('admin_head', 'corolate_tinymce_btn');

// Declare script for new button
function corolate_tinymce_plugin( $plugin_array ) {
	$plugin_array['corolate_buttons'] = get_template_directory_uri() .'/inc/shortcode-button.js';
	return $plugin_array;
}

// Register new button in the editor
function corolate_tinymce_register_btn( $buttons ) {
	array_push( $buttons, 'corolate_buttons' );
	return $buttons;
}