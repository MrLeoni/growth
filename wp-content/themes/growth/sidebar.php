<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Growth
 */
 
	$sidebar_post_args = array(
	"post_type"	=> "complementos",
	"posts_per_page" => 99,
	"orderby"	=> "modified",
	);
 
	$sidebar_posts_query = new WP_Query( $sidebar_post_args );

/*if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}*/
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="sidebar-custom-widget">
		<?php
			while($sidebar_posts_query->have_posts()): $sidebar_posts_query->the_post();
				// Get Link ACF Fields
				$url= get_field("banner-link-url");
				$title = get_field("banner-link-title");
				$target = get_field("banner-link-target");
				if(has_post_thumbnail()): ?>
					<a class="sidebar-banner" href="<?php echo $url; ?>" title="<?php echo $title; ?>" target="<?php echo $target; ?>"><?php the_post_thumbnail("medium"); ?></a>
				<?php else: ?>
			<div class="sidebar-post">
				<?php
				the_title("<h4>", "</h4>");
				the_content();
				?>
			</div>
			<?php 
			endif;
			endwhile;
			wp_reset_postdata();
		?>
	</div>
</aside><!-- #secondary -->
