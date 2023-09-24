<?php
/**
 * FrontOnline 2023 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FrontOnline_2023
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function frontonline_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on FrontOnline 2023, use a find and replace
		* to change 'frontonline' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'frontonline', get_template_directory() . '/languages' );

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
	add_image_size('300x300',300,300,true);

	// This theme uses wp_nav_menu() in one location.
// Menu Footer
register_nav_menus( array(
    'primary-nav' => "Primary Menu",
    'menu-bottom' => "Bottom Menu"
) );


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'frontonline_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'frontonline_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function frontonline_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'frontonline_content_width', 640 );
}
add_action( 'after_setup_theme', 'frontonline_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function frontonline_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'frontonline' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'frontonline' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'frontonline_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function frontonline_scripts() {
	wp_enqueue_style( 'frontonline-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'frontonline-style', 'rtl', 'replace' );

	//wp_enqueue_script( 'frontonline-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'frontonline_scripts' );

// Menu rregullo
function menu_fix_on_search_page( $query ) { 
if(is_search()){ 
$query->set( 'post_type', array( 'post', 'nav_menu_item' ));
return $query;
}
}
add_filter( 'pre_get_posts', 'menu_fix_on_search_page' );

function limit($value, $limit = 100, $end = '...')
{
 if (strlen($value) <= $limit) return $value;
 return mb_substr($value, 0, $limit).$end;
}


//Facebook Share
function insert_fb_in_head() {
    $og_metatags = '';
    if(is_home() || is_front_page()){
        $url = '/wp-content/uploads/2023/08/arsenaltimes-1-e1691072460200.jpg';
        $og_metatags .= '<meta property="og:title" content="'.get_bloginfo('name').'" />';
        $og_metatags .= '<meta property="og:description" content="..." />';
        $og_metatags .= '<meta property="og:image:width" content="500" />';
        $og_metatags .= '<meta property="og:image:height" content="500" />';
        $og_metatags .= '<meta property="og:image" content="'.$url.'" />';
        $og_metatags .= '<meta property="og:type" content="website" />';
        $og_metatags .= '<meta property="og:url" content="'.home_url().'" />';
        $og_metatags .= '<meta property="og:locale" content="en_US" />';
    }else{
        $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );   
        $excerpt = strip_tags(get_the_excerpt());
        $og_metatags .= '<meta property="og:title" content="'.strip_tags(get_the_title()).'" />';
        $og_metatags .= '<meta property="og:description" content="..." />';
		$og_metatags .= '<meta property="og:image:width" content="500" />';
		$og_metatags .= '<meta property="og:image:height" content="500" />';
        $og_metatags .= '<meta property="og:image" content="'.$url.'" />';
        $og_metatags .= '<meta property="og:type" content="article" />';
        $og_metatags .= '<meta property="og:url" content="'.get_permalink().'" />';
        $og_metatags .= '<meta name="twitter:title" content="'.strip_tags(get_the_title()).'" />';
        $og_metatags .= '<meta name="twitter:description" content="'.strip_tags(get_the_excerpt()).'" />';
        $og_metatags .= '<meta name="twitter:image" content="'.$url.'" />';
        $og_metatags .= '<meta name="twitter:card" content="summary_large_image" />';
        $og_metatags .= '<meta name="twitter:site" content="@ArsenalTimes" />';
        $og_metatags .= '<meta name="twitter:creator" content="@ArsenalTimes" />';        
    }
    echo $og_metatags;
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );


// Ndrysho Pamjen New Post
add_filter('gutenberg_can_edit_post', '__return_false', 5);
add_filter('use_block_editor_for_post', '__return_false', 5);


// Reklama ne artikull

function prefix_insert_after_paragraph2( $ads, $content ) {
    if ( ! is_array( $ads ) ) {
        return $content;
    }

    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );

    foreach ($paragraphs as $index => $paragraph) {
        if ( trim( $paragraph ) ) {
            $paragraphs[$index] .= $closing_p;
        }

        $n = $index + 1;
        if ( isset( $ads[ $n ] ) ) {
            $paragraphs[$index] .= $ads[ $n ];
        }
    }

    return implode( '', $paragraphs );
}

// add_filter( 'the_content', 'prefix_insert_post_ads' );
// function prefix_insert_post_ads( $content ) {
//     if ( is_single() && ! is_admin() ) {
//         $content = prefix_insert_after_paragraph2( array(
//             '8' => '<div class="des-adv" style="width: 300px;margin: 20px auto;">
// <!-- Revive Adserver Asynchronous JS Tag - Generated with Revive Adserver v5.3.1 -->
// <ins data-revive-zoneid="18" data-revive-id="a018272a477b6c0e5217bb1672e1bdb9"></ins>
// <script async src="//reporteri.net/reklamap/www/delivery/asyncjs.php"></script></div>',

//             '12' => '<div class="des-adv" style="width: 300px;margin: 20px auto;">
// <ins data-revive-zoneid="19" data-revive-id="a018272a477b6c0e5217bb1672e1bdb9"></ins>
// <script async src="//reporteri.net/reklamap/www/delivery/asyncjs.php"></script></div>',

//  '16' => '<div class="des-adv" style="width: 300px;margin: 20px auto;">
// <ins data-revive-zoneid="29" data-revive-id="a018272a477b6c0e5217bb1672e1bdb9"></ins>
// <script async src="//reporteri.net/reklamap/www/delivery/asyncjs.php"></script></div>',

//  '20' => '<div class="des-adv" style="width: 300px;margin: 20px auto;">
// <ins data-revive-zoneid="30" data-revive-id="a018272a477b6c0e5217bb1672e1bdb9"></ins>
// <script async src="//reporteri.net/reklamap/www/delivery/asyncjs.php"></script></div>',



//         ), $content );
//     }

//     return $content;
// }


// Autori Foto default

define('DEFAULT_AVATAR_URL', get_template_directory_uri() . '/logo/avatari.png');

function no_gravatars( $avatar ) {
    return preg_replace( "/http.*?gravatar\.com[^\']*/", DEFAULT_AVATAR_URL, $avatar );
}
add_filter( 'get_avatar', 'no_gravatars' );


// Largo nga menu/plugins
function hide_plugin_trickspanda() {
  global $wp_list_table;
  $hidearr = array('advanced-custom-fields-pro/acf.php','remove-category-url/remove-category-url.php','easymega-pro/easymega.php');

  $myplugins = $wp_list_table->items;
  foreach ($myplugins as $key => $val) {
    if (in_array($key,$hidearr)) {
      unset($wp_list_table->items[$key]);
    }
  }
}

add_action('pre_current_active_plugins', 'hide_plugin_trickspanda');

function chetz_remove_admin_menus(){

// Check that the built-in WordPress function remove_menu_page() exists in the current installation
if ( function_exists('remove_menu_page') ) { 

    remove_menu_page('edit.php?post_type=acf-field-group');
	remove_menu_page('remove-category-url');
}
}
add_action('admin_menu', 'chetz_remove_admin_menus');

