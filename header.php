<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="decription" content="<?php if ( is_singular() ) {the_excerpt();} else {echo 'ロボット・ヒューマノイドの情報メディア、ロボ部です！';} ?>"> 
	<script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
  	ga('create', 'UA-62908913-1', 'auto');
  	ga('send', 'pageview');
	</script>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" id="dashicons-css" href="../wp-includes/css/dashicons.min.css" type="text/css" media="all">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
<title>
<?php if ( is_home() ): 
		echo 'ロボット・ヒューマノイド情報 メディア　ロボ部';
	elseif ( is_search() ): 
		the_search_query(); echo '| ロボ部';
	elseif ( is_single() || is_page()): 
		wp_title(''); echo '| ロボ部'; 
	elseif ( is_category() ):
		single_cat_title(); echo '| ロボ部'; 
	elseif ( is_month() ):
		the_time('F'); echo '| ロボ部'; 
	elseif ( is_tag() ):
		single_tag_title(); echo '| ロボ部'; 
	endif;
?>
</title>
</head>

<body <?php body_class(); ?>>
<header class="header">
	<div id="logo-bar">
		<a href="/">
			<img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/robobu_icon_b.png" width="129" height="45">
		</a>
		<a href="/">ロボット・ヒューマノイド情報 メディア</a>
	</div>
	<nav>
		<ul>
			<li><a href="/tag/やってみた">やってみた</a></li>
			<li><a href="/tag/interview">インタビュー</a></li>
			<li><a href="/tag/new-topic">最新情報</a></li>
		</ul>
	</nav>
</header>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
