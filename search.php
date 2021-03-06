<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main clear" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 style="display:none;"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
				<form role="search" method="get" class="search-form" action="/">
					<label>
					
						<input type="search" class="search-field" placeholder="<?php printf( __( '気になるワードを検索！: %s', 'twentyfifteen' ), get_search_query() ); ?>" value="" name="s" title="検索:">
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
			?>

			<?php
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
		<?php
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );
		?>
	</section><!-- .content-area -->

<?php get_footer(); ?>
