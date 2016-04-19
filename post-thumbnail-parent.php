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
