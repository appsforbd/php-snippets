<?php
/**
 * Get post-thumbnail-url
 */

function dhali_featured_image() {

  // Get Featured Image URL
  if ( has_post_thumbnail() ) {

    $feature_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail' );
    $feature_image_url = $feature_image_url[0];

  } elseif ( isset( $term->taxonomy ) && $feature_image_id ) {

    $feature_image_url = wp_get_attachment_image_src( $feature_image_id , 'post-thumbnail' );
    $feature_image_url = $feature_image_url[0];

  } else {

    $feature_image_url = get_template_directory_uri() . '/images/feature/feature-why-here.jpg';
  }

  return $feature_image_url;
}