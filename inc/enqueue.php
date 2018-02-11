<?php

//All css and JS file
function corolate_cs_js(){
	wp_enqueue_style( 'google-font', corolate_fonts_url(), array(), '3.4.4' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '3.4.4', 'all' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '3.4.4', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.min.css', array(), '3.4.4', 'all' );
    wp_enqueue_style( 'prettyPhoto', get_template_directory_uri().'/assets/css/prettyPhoto.css', array(), '3.4.4', 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css', array(), '3.4.4', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '3.4.4', 'all' );
	wp_enqueue_style( 'consult-comment-style', get_stylesheet_uri() );
        if ( is_singular() ) wp_enqueue_script( 'comment-reply' );	
	wp_enqueue_script( 'jquery-min', get_template_directory_uri().'/assets/js/jquery.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'prettyPhotojs', get_template_directory_uri().'/assets/js/jquery.prettyPhoto.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/js/jquery.isotope.min.js', array(), '1.0.0', 'true' );    
    wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0.0', 'true' );

}

add_action( 'wp_enqueue_scripts', 'corolate_cs_js');

//Google Font Setup
function corolate_fonts_url() {
$fonts_url = '';
$open_sans = _x( 'on', 'Open Sans font: on or off', 'theme-slug' );
$Montserrat = _x( 'on', 'Montserrat font: on or off', 'theme-slug' );

if ( 'off' !== $open_sans || 'off' !== $Montserrat ) {
	$font_families = array();
	if ( 'off' !== $open_sans ) {
	$font_families[] = 'Open+Sans:300i,400,400i,600,700,800';
	}
	if ( 'off' !== $Montserrat ) {
	$font_families[] = 'Montserrat:200,300,400,500,600,700,800,900';
	}

	$query_args = array(
	'family' => urlencode( implode( '|', $font_families ) ),
	'subset' => urlencode( 'cyrillic-ext,cyrillic,vietnamese,latin-ext,latin' ),
	);

	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
}
return esc_url_raw($fonts_url);
}

//Adding Google fonts to the editor
function corolate_editor_styles() {
$open_sans = (array('editor-style.css', '//fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800'));
$Montserrat = (array('editor-style.css', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900'));
add_editor_style($open_sans, $Montserrat);
}
add_action( 'after_setup_theme', 'corolate_editor_styles' );

//Adding Google fonts to Header
function corolate__custom_header_fonts() {
wp_enqueue_style( 'open_sans-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800', array(), null );
wp_enqueue_style( 'Montserrat-fonts', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900', array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'corolate__custom_header_fonts' );