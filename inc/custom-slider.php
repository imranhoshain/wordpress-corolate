
<?php 

//Slider register function
function corolate_custom_slide(){
register_post_type('slide', array(
	'label' => 'slides',
	'labels' => array(
		'name' => 'Slides',
		'singular_name' => 'slide',
	),
	'public' => true,
	'menu_icon' => 'dashicons-images-alt',
	'supports' => array('title','editor','thumbnail','custom-fields','excerpt'),


));

}
add_action('init', 'corolate_custom_slide');