/**
 * Change Query on Posts
 */
function et_post( $query ) {
	if ( is_post_type_archive( 'clients' ) || is_post_type_archive( 'testimonial' ) ) {
		// Display all posts
		$query->set( 'posts_per_page', -1 );
		return;
	}
}
add_action( 'pre_get_posts', 'et_post', 1 );
