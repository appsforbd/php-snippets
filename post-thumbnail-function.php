<?php
/**
 * Get post-thumbnail-url
 */

function dhali_featured_image() {

  // Get Featured Image URL
  if ( has_post_thumbnail( $post->ID ) ) {

    $feature_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail' );
    $feature_image_url = $feature_image_url[0];

  } elseif ( has_post_thumbnail( $post->post_parent ) ) {

    $feature_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->post_parent ), 'post-thumbnail' );
    $feature_image_url = $feature_image_url[0];

  } else {

    $feature_image_url = get_template_directory_uri() . '/images/feature/feature-why-here.jpg';
  }

  return $feature_image_url;
}