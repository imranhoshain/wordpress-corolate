
<?php 

//Slider register function
function corolate_custom_recent_work(){
register_post_type('recent', array(
	'label' => 'recents',
	'labels' => array(
		'name' => 'recents',
		'singular_name' => 'recent',
	),
	'public' => true,
	'menu_icon' => 'dashicons-images-alt2',
	'supports' => array('title','editor','custom-fields','excerpt','page-attributes','thumbnail'),


));

}
add_action('init', 'corolate_custom_recent_work');