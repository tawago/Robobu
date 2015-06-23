<?php

if ( ot_get_option( 'enable_custom_titles' ) === 'on' ) {
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
}else if ( ot_get_option( 'enable_custom_titles' ) === 'off' ) {
    add_theme_support( 'title-tag' );
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
