<?php
/**
 * Displays Attachment by category
 *
 * @package dhali
 */

	$args = array(
		'posts_per_page'   => -1,
		'orderby'          => 'menu_order',
		'order'            => 'ASC',
		'post_type'        => 'attachment',
		'category_name'    => 'retailers',
	);

	$retailers = get_posts( $args );

		echo '<div class="row">';
		echo '<div class="container"><header class="page-header"><h1 class="page-title">Our retailers</h1></header></div>';
		echo '<div class="container-fluid"><div class="row">';

	foreach ( $retailers as $retailer ):

?>

	<div class="col-xs-6 col-sm-4 col-lg-2">
		<?php	echo wp_get_attachment_image( $retailer->ID, 'product-sm', false, array( 'class' => 'img-responsive' ) );
		 ?>
	</div>

<?php	endforeach;
	echo '</div></div></div>';
?>
