
<?php 

//Service register function
function corolate_custom_service(){
register_post_type('service', array(
	'label' => 'services',
	'labels' => array(
		'name' => 'services',
		'singular_name' => 'service',
	),
	'public' => true,
	'menu_icon' => 'dashicons-images-alt2',
	'supports' => array('title','editor','custom-fields','excerpt','page-attributes','thumbnail'),


));

}
add_action('init', 'corolate_custom_service');