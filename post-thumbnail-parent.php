// Post Thumbnail of Parent Or Current Post w/ Default Image
<?php if ( has_post_thumbnail( $post->post_parent, 'post-thumbnail' ) ) {
	echo get_the_post_thumbnail( $post->post_parent, 'post-thumbnail' );
	}
	else {
		if ( has_post_thumbnail( $post->ID, 'post-thumbnail' ) ) {
			the_post_thumbnail('post-thumbnail', array( 'class' => 'media-fluid' ));
		}
	else {
			echo '<img src="'. get_template_directory_uri().'/images/feature/page-feature.jpg" alt="'. get_the_title() .'" class="media-fluid">';
		}
	}
?>

//Get Post Thumbnail URL of Parent Or Current Post w/ Default Image
<?php
	if ( has_post_thumbnail( $post->post_parent, 'post-thumbnail' ) ) {
		$featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->post_parent ), 'post-thumbnail' );
		$featured_image_url = $featured_image_url[0];
	}
	elseif ( has_post_thumbnail( $post->ID, 'post-thumbnail' ) ) {
		$featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail' );
		$featured_image_url = $featured_image_url[0];
	}
	else {
		$featured_image_url = get_template_directory_uri().'/images/feature/site-feature.jpg';
	}
?>
