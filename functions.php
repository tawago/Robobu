<?php

function twentyfifteen_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}
	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}

function remove_thumbnail_size() {
    remove_image_size( 'post-thumbnail' );
}
add_action( 'init', 'remove_thumbnail_size' );
