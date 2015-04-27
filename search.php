<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>
<style>
@media screen and (min-width: 59.6875em){
  body:before {
    display: none;
  }
  .sidebar{
    display: none;
  }
  .site-content{
    width: 100%;
    margin: 0 0 6%;
    padding: 0 10%;
  }
  .page-header{
    margin: 0; 
    border: none;
    padding: 0;
    box-shadow: none;
  }
  .page-header .search-form:before{
    position: absolute;
    z-index: 20;
    margin: 10px;
    padding-right: 10px;
    font: 400 40px/1 dashicons!important;
    content: '\f179';
    speak: none;
    color: #707070;
    color: rgba(51, 51, 51, 0.5);
    border-right: 2px solid rgba(51, 51, 51, 0.5);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  .page-header input[type="search"]{
    height: 60px;
    padding-left: 75px;
  }
  .page-header input::-webkit-input-placeholder{
    font-size: 0.9em;
    display: block;
    height: 60px;
  }
  .hentry{
    width: 30%;
    float: left;
    margin: 8.3333% 2.6em 0 0; 
    padding-top: 6%;
  }
  .hentry:nth-child(4n){ margin: 0; margin-top: 8.3333%; /*検索結果の右列は右マージンなし*/ }

  .hentry.has-post-thumbnail {
    padding-top: 0;
  }
  .hentry .entry-title{
    font-size: 1.2em;
  }
  .hentry .entry-summary{
    font-size: 0.85em;
  }
  .site-footer{
    width: 100%;
    margin: 0 10%;
    padding: 0;
    float: none;
    position: relative;
    clear: both;
  }
</style>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 style="display:none;"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
				<form role="search" method="get" class="search-form" action="http://robobu.io/">
					<label>
					
						<input type="search" class="search-field" placeholder="<?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?>" value="" name="s" title="検索:">
					</label>
					<input type="submit" class="search-submit screen-reader-text" value="検索">
				</form>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
