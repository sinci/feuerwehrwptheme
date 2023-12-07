<?php
/**
 * feuerwehrwp2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package feuerwehrwp2
 */

if ( ! function_exists( 'feuerwehrwp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function feuerwehrwp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on feuerwehrwp2, use a find and replace
		 * to change 'feuerwehrwp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'feuerwehrwp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
			'menu-1' => esc_html__( 'Top Menu', 'feuerwehrwp' ),
			'sidebar-menu' => esc_html__( 'Sidebar Menu', 'feuerwehrwp' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'feuerwehrwp' ),
			) 
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'feuerwehrwp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );


		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'feuerwehrwp_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function feuerwehrwp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-Home', 'feuerwehrwp' ),
		'id'            => 'sidebar-home',
		'description'   => esc_html__( 'Add widgets here.', 'feuerwehrwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s uk-background-muted uk-padding-small uk-panel uk-margin-bottom">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="uk-h3">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-Page', 'feuerwehrwp' ),
		'id'            => 'sidebar-page',
		'description'   => esc_html__( 'Add widgets here.', 'feuerwehrwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s uk-background-muted uk-padding-small uk-panel uk-margin-bottom">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="uk-h3">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-Einsatz', 'feuerwehrwp' ),
		'id'            => 'sidebar-einsatz',
		'description'   => esc_html__( 'Add widgets here.', 'feuerwehrwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s uk-background-muted uk-padding-small uk-panel uk-margin-bottom">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="uk-h3">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-Termine', 'feuerwehrwp' ),
		'id'            => 'sidebar-termine',
		'description'   => esc_html__( 'Add widgets here.', 'feuerwehrwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s uk-background-muted uk-padding-small uk-panel uk-margin-bottom">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="uk-h3">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer-1', 'feuerwehrwp' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'feuerwehrwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="uk-h3">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer-2', 'feuerwehrwp' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'feuerwehrwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="uk-h3">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer-3', 'feuerwehrwp' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'feuerwehrwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="uk-h3">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'feuerwehrwp_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function feuerwehrwp_scripts() {

	wp_enqueue_style( 'uikit-min', get_template_directory_uri() . '/css/uikit.min.css' );

	wp_enqueue_style( 'uikit-trl-min', get_template_directory_uri() . '/css/uikit-rtl.min.css' );

	wp_enqueue_style( 'custom-stylesheet', get_template_directory_uri() . '/css/custom.css' );

	wp_enqueue_script( 'feuerwehrwp-uikit', get_template_directory_uri() . '/js/uikit.min.js', array(), '20151215', true );

	wp_enqueue_script( 'feuerwehrwp-icons', get_template_directory_uri() . '/js/uikit-icons.min.js', array(), '20151215', true );

	//Load scripts:
  wp_enqueue_script('jquery'); # Loading the WordPress bundled jQuery version.
  //may add more scripts to load like jquery-ui

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'feuerwehrwp_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Top Menu
 */
require get_template_directory() . '/inc/wp-custom-nav-walker.php';

/**
 * Plugin activation.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Read more text
 */
function helpwp_modify_read_more_link() {
    return '<a class="uk-button uk-button-default" href="'. get_permalink() . '">Weiterlesen</a>';
}
add_filter( 'the_content_more_link', 'helpwp_modify_read_more_link' );


// Remove Header Customize
add_action( "customize_register", "feuerwehrwp_theme_customize_register" );
function feuerwehrwp_theme_customize_register( $wp_customize ) {
 $wp_customize->remove_control("header_image");
}



// Search Form Style
function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="uk-search uk-search-default" action="' . home_url( '/' ) . '" >
   	<a href="'. esc_attr__( 'Search' ) .'" class="uk-search-icon-flip" uk-search-icon></a>
	<input class="uk-search-input" type="search" placeholder="'. esc_attr__( 'Search' ) .'" value="' . get_search_query() . '" name="s" id="s">
	</form>';
	
    return $form;
}
add_filter( 'get_search_form', 'my_search_form', 100 );

// SVG Support
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


// Post Type Einsaetze
add_action( 'init', 'einsaetze_post_type', 0 );
function einsaetze_post_type() {

	$labels = array(
		'name'                => _x( 'Einsätze', 'Post Type General Name', 'feuerwehrwp' ),
		'singular_name'       => _x( 'Einsatz', 'Post Type Singular Name', 'feuerwehrwp' ),
		'menu_name'           => __( 'Einsätze', 'feuerwehrwp' ),
		'parent_item_colon'   => __( 'Parent Einsatz ', 'feuerwehrwp' ),
		'all_items'           => __( 'Alle Einsätze', 'feuerwehrwp' ),
		'view_item'           => __( 'View Einsätze', 'feuerwehrwp' ),
		'add_new_item'        => __( 'Add New Einsatz', 'feuerwehrwp' ),
		'add_new'             => __( 'Add New Einsatz', 'feuerwehrwp' ),
		'edit_item'           => __( 'Edit Einsatz', 'feuerwehrwp' ),
		'update_item'         => __( 'Update Einsatz', 'feuerwehrwp' ),
		'search_items'        => __( 'Search Einsatz', 'feuerwehrwp' ),
		'not_found'           => __( 'Not Found', 'feuerwehrwp' ),
		'not_found_in_trash'  => __( 'Not Found in Trash', 'feuerwehrwp' ),
	);

	$args = array(
		'label'               => __( 'Einsätze', 'feuerwehrwp' ),
		'description'         => __( 'Einsätze', 'feuerwehrwp' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
   		'menu_icon'           => 'dashicons-admin-multisite',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'capability_type'     => 'page',
	);

// register the new post type
register_post_type( 'einsaetze', $args );
}

function einsatz_category_taxonomy() {
  $labels = array(
  	'name'              => _x( 'Einsatz Kategorie', 'taxonomy general name' ),
  	'singular_name'     => _x( 'Einsatz Kategorie', 'taxonomy singular name' ),
  	'search_items'      => __( 'Search Einsatz Kategorie' ),
  	'all_items'         => __( 'All Einsatz Kategorien' ),
  	'parent_item'       => __( 'Parent Einsatz Kategorie' ),
  	'parent_item_colon' => __( 'Parent Einsatz Kategorie:' ),
  	'edit_item'         => __( 'Edit Einsatz Kategorie' ),
  	'update_item'       => __( 'Update Einsatz Kategorie' ),
  	'add_new_item'      => __( 'Add Einsatz Kategorin' ),
  	'new_item_name'     => __( 'New Einsatz Kategorie' ),
  	'menu_name'         => __( 'Einsatz Kategorie' ),
  );

  $args = array(
    'hierarchical'  => true, //like categories or tags
    'labels'        => $labels,
    'show_ui'       => true, //add the default UI to this taxonomy
    'show_admin_column' => true, //add the taxonomies to the wordpress admin
    'query_var'         => true,
    //'rewrite'       => array('slug' =>'einsaetze'),
  );

  register_taxonomy( 'einsatz-category', 'einsaetze', $args );
}

add_action('init', 'einsatz_category_taxonomy');



// Custom PostType in Frontpage
function print_termine_einsaetze_posts($query) {

	//not the admin but the main query
	if(!is_admin() && $query->is_main_query()) {
		//add post to home
		if(is_home()) {
			$query->set('post_type', array('post', 'einsaetze'));
		}
	}
}
add_action('pre_get_posts', 'print_termine_einsaetze_posts');


// Footer Credits - Footer Info
if ( ! class_exists( '' ) ) {
	include( dirname( __FILE__ ) . '/inc/class-footer-credits.php' );
}
/**
 * Load the plugin.
 */
$footer_credits = new Cedaro_Footer_Credits();
add_action( 'after_setup_theme', array( $footer_credits, 'register_hooks' ) );

if ( ! function_exists( 'feuerwehrwp_credits' ) ) :


/**
 * Theme credits text.
 */
function themename_credits() {
	$text = sprintf( __( '%s', 'feuerwehrwp' ),
		'feuerwehrwp theme by <a href="http://www.sinci.at/" target="_blank">sinci</a>'
	);

	echo apply_filters( 'footer_credits', $text );
}
endif;

// ULKIT-SLIDESHOW PLUGIN
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
    $plugins = array(
        array(
            'name'      => 'Ulkit Slideshow',
            'slug'      => 'ulkit-slideshow',
            'source'    => get_template_directory() . '/plugins/ulkit-slideshow.zip',
            'required'  => true,
        ),
    );

    $config = array(
        'id'           => 'my-theme',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => true,
        'message'      => '',
    );

    tgmpa( $plugins, $config );
}


