<?php
/**
 * logotech2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package logotech2
 */

if ( ! function_exists( 'logotech2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function logotech2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on logotech2, use a find and replace
		 * to change 'logotech2' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'logotech2', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'logotech2' ),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'logotech2_custom_background_args', array(
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
add_action( 'after_setup_theme', 'logotech2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function logotech2_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'logotech2_content_width', 640 );
}
add_action( 'after_setup_theme', 'logotech2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function logotech2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'logotech2' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'logotech2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'logotech2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function logotech2_scripts() {
    wp_enqueue_style( 'logotech2-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'logotech2-normalize', get_template_directory_uri().'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), 20190907 );
    wp_enqueue_style( 'logotech2-styles', get_template_directory_uri().'/assets/css/styles.css', array('logotech2-normalize'), 20190712 );

    // Deregister core jQuery
    wp_deregister_script('jquery');
    // Register
    wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);
    wp_enqueue_script( 'jquery');

    // Слик слайдер
    wp_enqueue_script( 'logo-tech-slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), '20190907', true );
    // Скрипты темы
    wp_enqueue_script( 'logo-tech-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '20190907', true );
    


	wp_enqueue_script( 'logotech2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'logotech2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'logotech2_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Настройки Redux.
 */
require get_template_directory() . '/inc/options-panel-redux.php';




/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function logotech_register_custom_post_type() {
 
    register_post_type( 'drones', array(
        'labels'             => array(
            'name'                  => 'Drones',
            'singular_name'         => 'Drones',
            'add_new'               => 'Add new',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'drones' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor','thumbnail' ),
    ) );

    register_post_type( 'serurity', array(
        'labels'             => array(
            'name'                  => 'Home serurity',
            'singular_name'         => 'Home serurity',
            'add_new'               => 'Add new',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'serurity' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor','thumbnail' ),
    ) );

    register_post_type( 'smartphone', array(
        'labels'             => array(
            'name'                  => 'Smartphones',
            'singular_name'         => 'Smartphones',
            'add_new'               => 'Add new',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'smartphone' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor','thumbnail' ),
    ) );

    register_post_type( 'headphones', array(
        'labels'             => array(
            'name'                  => 'Headphones',
            'singular_name'         => 'Headphones',
            'add_new'               => 'Add new',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'headphones' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor','thumbnail' ),
    ) );

    register_post_type( 'woman', array(
        'labels'             => array(
            'name'                  => 'Shop woman',
            'singular_name'         => 'Shop woman',
            'add_new'               => 'Add new',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'woman' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor','thumbnail' ),
    ) );

    register_post_type( 'man', array(
        'labels'             => array(
            'name'                  => 'Shop man',
            'singular_name'         => 'Shop man',
            'add_new'               => 'Add new',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'man' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-yes',
        'supports'           => array( 'title', 'editor','thumbnail' ),
    ) );
}
 
add_action( 'init', 'logotech_register_custom_post_type' );