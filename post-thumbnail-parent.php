// Post Thumbnail of Parent Or Current Post w/ Default Image
<?php if ( has_post_thumbnail( $post->ID, 'post-thumbnail' ) ) {
	echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
	}
	elseif ( has_post_thumbnail( $post->post_parent, 'post-thumbnail' ) ) {
		echo get_the_post_thumbnail( $post->post_parent, 'post-thumbnail' );
	}
	else {
		echo '<img src="'. get_template_directory_uri().'/images/feature/laptop-browsing-2000x475.jpg" alt="'. get_the_title() .'" class="media-fluid">';
	}
?>

//Get Post Thumbnail URL of Parent Or Current Post w/ Default Image
<?php	if ( has_post_thumbnail( $post->ID, 'post-thumbnail' ) ) {
		$featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
		$featured_image_url = $featured_image_url[0];
	}
	elseif ( has_post_thumbnail( $post->post_parent, 'post-thumbnail' ) ) {
		$featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->post_parent ), 'post-thumbnail' );
		$featured_image_url = $featured_image_url[0];
	}
	else {
		$featured_image_url = get_template_directory_uri().'/images/feature/site-feature.jpg';
	}
?>
<div class="page-feature" style="background-image: url('<?php echo $featured_image_url; ?>')">
	<div class="container">
		<div class="feature-intro">
			<div class="feature-tagline">Why You Should Think Light Weight</div>
		</div>
	</div><!-- .container -->
</div><!-- .site-feature -->
