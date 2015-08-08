<?php
/**
 * The template for displaying the footer
 
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->
</div><!-- .site -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
		?>
		<div></div>
		<hr class="footer-divider">
		<div class="text-center">
			<h5>Robobu.io</h5>
			<ul>
				<li><a href="/about">ロボ部について</a></li>
			</ul>
		</div>		
	</div><!-- .site-info -->
</footer><!-- .site-footer -->


<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/functions.js"></script>

</body>
</html>
