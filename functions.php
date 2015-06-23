<?php
add_filter( 'wp_title', 'custom_titles', 10, 2 );
function custom_titles() {
	if ( is_home() ):  
		echo 'ロボット・ヒューマノイド情報 メディア　ロボ部'; 
	elseif ( is_search() ):  
		the_search_query(); echo ' | ロボ部'; 
	elseif ( is_single() || is_page()):  
		echo get_the_title(); echo ' | ロボ部';  
	elseif ( is_category() ): 
		single_cat_title(); echo ' | ロボ部';  
	elseif ( is_month() ): 
		the_time('F'); echo ' | ロボ部';  
	elseif ( is_tag() ): 
		single_tag_title(); echo ' | ロボ部';  
	endif;
}

function twentyfifteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */

	//add_theme_support( 'title-tag' );   We have custom title tag

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );
	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );
}


function twentyfifteen_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}
	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail('medium'); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>
	
	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" style="background: url(<?php $image= wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); echo $image[0];?>)">
		<?php
			//the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}
?>
