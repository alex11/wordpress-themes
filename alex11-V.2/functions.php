<?php
if ( !function_exists( 'bp_dtheme_enqueue_styles' ) ) :
/**
 * Enqueue theme CSS safely
 *
 * For maximum flexibility, BuddyPress Default's stylesheet is enqueued, using wp_enqueue_style().
 * If you're building a child theme of bp-default, your stylesheet will also be enqueued,
 * automatically, as dependent on bp-default's CSS. For this reason, bp-default child themes are
 * not recommended to include bp-default's stylesheet using <a href="http://buddypress.org/community/members/import/" rel="nofollow">@import</a>.
 *
 * If you would prefer to use <a href="http://buddypress.org/community/members/import/" rel="nofollow">@import</a>, or would like to change the way in which stylesheets are
 * enqueued, you can override bp_dtheme_enqueue_styles() in your theme's functions.php file.
 *
 * <a href="http://buddypress.org/community/members/see/" rel="nofollow">@see</a> http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 * <a href="http://buddypress.org/community/members/see/" rel="nofollow">@see</a> http://codex.buddypress.org/releases/1-5-developer-and-designer-information/
 * <a href="http://buddypress.org/community/members/since/" rel="nofollow">@since</a> 1.5
 */
function bp_dtheme_enqueue_styles() {
 
    // Bump this when changes are made to bust cache
    $version = '20111013';
 
    // Register our main stylesheet
    wp_register_style( 'bp-default-main', get_template_directory_uri() . '/_inc/css/default.css', array(), $version );
 
    // If the current theme is a child of bp-default, enqueue its stylesheet
    if ( is_child_theme() && 'bp-default' == get_template() ) {
        wp_enqueue_style( get_stylesheet(), get_stylesheet_uri(), array( 'bp-default-main' ), $version );
    }
 
    // Enqueue the main stylesheet
    wp_enqueue_style( 'bp-default-main' );
 
    // Default CSS RTL
    if ( is_rtl() )
        wp_enqueue_style( 'bp-default-main-rtl',  get_template_directory_uri() . '/_inc/css/default-rtl.css', array( 'bp-default-main' ), $version );
 
    // Responsive layout
    if ( current_theme_supports( 'bp-default-responsive' ) ) {
        wp_enqueue_style( 'bp-default-responsive', get_stylesheet_directory_uri() . '/responsive.css', array( 'bp-default-main' ), $version );
 
        if ( is_rtl() )
            wp_enqueue_style( 'bp-default-responsive-rtl', get_template_directory_uri() . '/_inc/css/responsive-rtl.css', array( 'bp-default-responsive' ), $version );
    }
}
add_action( 'wp_enqueue_scripts', 'bp_dtheme_enqueue_styles' );
endif;

// Change LogIn Logo

add_action("login_head", "my_login_head");
function my_login_head() {
	echo "
	<style>
	body.login #login h1 a {
		background: url('/wp-content/themes/alex11-V.2/images/logo-login.png') no-repeat scroll center top transparent;
		height: 63px;
	}
	</style>
	";
}


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