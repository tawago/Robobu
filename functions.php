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
	
	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" style="background: url(<?php $image= wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); echo $image[0];?>)">
		<?php
			the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}
?>
