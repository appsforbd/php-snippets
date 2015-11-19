<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if ( is_plugin_active('ml-slider/ml-slider.php') )
		$hasMetaSliderPlugin = true;
?>

<?php if ($hasMetaSliderPlugin) { ?>

<div class="site-feature grid grid-pad">
	<div class="grid-col col-12-12">
		<div class="feature-wrap grid">
			<div class="feature-image grid-col col-8-12">
				<?php
					echo do_shortcode("[metaslider id=463]");
				?>
			</div><!-- /.feature-image -->
			<div class="feature-description grid-col col-4-12">
				<?php dynamic_sidebar( 'homepage-1' ); ?>
			</div><!-- /.feature-description -->
		</div><!-- /.feature-wrap -->
	</div><!-- /.grid-col -->
</div><!-- /.site-feature -->

<?php } ?>
