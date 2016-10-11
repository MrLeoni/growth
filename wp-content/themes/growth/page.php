<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Growth
 */
 
 // Get page thumbnail and use for background image
 $thumb_id = get_post_thumbnail_id();
 $thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="banner" style="background: url(<?php echo $thumb_url[0]; ?>) no-repeat center 40%">
				<!-- Empty -->
			</section>
			<section id="page">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', 'page' );
							endwhile; // End of the loop.
							?>
						</div>
						<div class="col-md-offset-1 col-md-3 hidden-sm hidden-xs">
							<?php get_sidebar(); ?>
						</div><!-- .col-3 -->
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
