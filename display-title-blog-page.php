<?php if( is_home() && get_option('page_for_posts') ) { ?>
	<header class="entry-header">
		<h1 class="entry-title">
			<?php echo apply_filters('the_title',get_page( get_option('page_for_posts') )->post_title); ?>
		</h1>
	</header>
<?php } ?>


<?php if( is_home() && get_option('page_for_posts') ) {
		echo apply_filters('the_title',get_page( get_option('page_for_posts') )->post_title);
		} else {
		echo get_the_title();
	}
?>

<?php single_post_title(); ?>
