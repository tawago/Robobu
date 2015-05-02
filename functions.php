<?php

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
	
	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'medium');?>)">
		<?php
			the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}
?>
