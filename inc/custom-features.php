
<?php 

//Slider register function
function corolate_custom_feature(){
register_post_type('feature', array(
	'label' => 'features',
	'labels' => array(
		'name' => 'features',
		'singular_name' => 'feature',
	),
	'public' => true,
	'menu_icon' => 'dashicons-welcome-learn-more',
	'supports' => array('title','editor','custom-fields','excerpt','page-attributes'),


));

}
add_action('init', 'corolate_custom_feature');