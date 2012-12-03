<?php
if ( function_exists('register_sidebar') ){
	register_sidebar( array(
		'name' => __( ' Startseite - Nicht angemeldete Benutzer', 'buddypress' ),
		'id' => 'fullside-only-loggedout-homepage-widget-area',
		'description' => __( 'The full side homepage widget area only logged out', 'buddypress' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Startseite - 1. volle Breite', 'buddypress' ),
		'id' => 'first-fullside-homepage-widget-area',
		'description' => __( 'The first full side homepage widget area', 'buddypress' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	) );
    register_sidebar( array(
		'name' => __( 'Startseite - Links', 'buddypress' ),
		'id' => 'left-homepage-widget-area',
		'description' => __( 'The left homepage widget area', 'buddypress' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Startseite - Rechts', 'buddypress' ),
		'id' => 'right-homepage-widget-area',
		'description' => __( 'The right homepage widget area', 'buddypress' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Startseite - 2. volle Breite', 'buddypress' ),
		'id' => 'second-fullside-homepage-widget-area',
		'description' => __( 'The second full side homepage widget area', 'buddypress' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Linkseite - Links', 'buddypress' ),
		'id' => 'left-linkpage-widget-area',
		'description' => __( 'The left linkpage widget area', 'buddypress' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Linkseite - Rechts', 'buddypress' ),
		'id' => 'right-linkpage-widget-area',
		'description' => __( 'The right linkpage widget area', 'buddypress' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Linkseite - volle Breite', 'buddypress' ),
		'id' => 'fullside-linkpage-widget-area',
		'description' => __( 'Full side linkpage widget area', 'buddypress' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	) );
}
// Added to extend allowed files types in Media upload
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {

// Add *.EPS files to Media upload
$existing_mimes['eps'] = 'application/postscript';

// Add *.AI files to Media upload
$existing_mimes['ai'] = 'application/postscript';

return $existing_mimes;
}