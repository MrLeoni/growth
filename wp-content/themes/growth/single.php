<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Growth
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="single-post">
				<div class="container">
					<div class="row">
						
						<div class="col-md-8">
							<?php
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content', get_post_format() );
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