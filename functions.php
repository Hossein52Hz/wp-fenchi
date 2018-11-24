<?php
/**
 * fenchi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fenchi
 */



if ( ! function_exists( 'fenchi_getPostViews' ) ) :
function fenchi_getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 views";
    }
    return $count.' views';
}
endif;
if ( ! function_exists( 'fenchi_setPostViews' ) ) :

function fenchi_setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
endif;

if ( ! function_exists( 'fenchi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fenchi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fenchi, use a find and replace
		 * to change 'fenchi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fenchi', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'primary', 'fenchi' ),
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
			/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
		add_theme_support( 'post-formats', array(
			'standard',
			'aside',
			'image',
			'video',
			'quote',
			'gallery',
			'audio',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fenchi_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// 
		function fenchi_add_editor_styles() {
			add_editor_style( 'custom-editor-style.css' );
		}
		add_action( 'admin_init', 'fenchi_add_editor_styles' );

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
add_action( 'after_setup_theme', 'fenchi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fenchi_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fenchi_content_width', 640 );
}
add_action( 'after_setup_theme', 'fenchi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fenchi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fenchi' ),
		'id'            => 'main-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'fenchi' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s card my-4 shadow-sm"><div class="card-body">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h2 class="widget-title widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fenchi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fenchi_scripts() {
	
	wp_enqueue_script( 'fenchi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'fenchi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Styles 
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/layouts/bootstrap.min.css',array(),'4.1.1' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/layouts/font-awesome/css/all.min.css', array(), '5.1' );
	wp_enqueue_style( 'fenchi-style', get_stylesheet_uri(), array() );
	wp_enqueue_style( 'lightgreen-css', get_template_directory_uri() . '/layouts/color/lightgreen.css',array(),'1.0.0' );
	
	// Scripts
	wp_enqueue_script( 'jquery-js' , get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'popper' , get_template_directory_uri() . '/js/popper.min.js', array(), '2017', true );
	wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.1', true );
	wp_enqueue_script( 'ekko-lightbox-js' , get_template_directory_uri() . '/js/ekko-lightbox.min.js', array(), '5.3.1', true );
	wp_enqueue_script( 'custom-js' , get_template_directory_uri() . '/js/custom.js', array(), '2018', true );

}
add_action( 'wp_enqueue_scripts', 'fenchi_scripts' );


/**
 *  Register Custom Navigation Walker
 */
require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom bootstrap pagination.
 */
require get_template_directory() . '/inc/wp-bootstrap4.1-pagination.php';

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
// Main customizer
require get_template_directory() . '/inc/customize/customizer.php';
// Site info section
require get_template_directory() . '/inc/customize/about-site-setting.php';
// footer section
require get_template_directory() . '/inc/customize/footer-setting.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
       
/**
 * widget additions.
 */
require get_template_directory() . '/inc/widgets/about-me.php';

/**
 * Meta boxes.
 */
// require get_template_directory() . '/inc/meta-box.php';

/**
 * cmb2 Meta boxe plugin
 */
 require get_template_directory() . '/cmb2/framework-functions.php';


