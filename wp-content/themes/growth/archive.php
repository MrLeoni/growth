<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Growth
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="archive">
				<header class="page-header">
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				</header><!-- .page-header -->
				<div class="container">
					<?php
						if ( have_posts() ) : ?>
							
							<div class="row">
								<div class="col-md-9">
									<div class="row">
									<?php 
									// $number to count post position
									$number = 0;
									// Start the Loop
									while(have_posts()): the_post(); ?>
										<div class='col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-6 post-normal'>
											<a class="blog-post-link" href="<?php the_permalink(); ?>" title="<?php get_the_title(); ?>">
												<?php the_post_thumbnail("large"); ?>
												<p><i class="ion-forward"></i></p>
											</a>
											<div class="blog-post-tags">
												<?php	the_tags("", " ", ""); ?>
											</div>
											<?php the_title("<h3><a href='".get_the_permalink()."' title='".get_the_title()."'>", "</a></h3>"); ?>
											<div class="blog-post-excerpt">
												<?php the_excerpt(); ?>
											</div>
											<p class='blog-post-date'><i class='ion-ios-clock'></i><?php echo get_the_date("j F", get_the_ID()); ?></p>
											<div class="post-separator"><!-- empty --></div>
										</div>
									<?php
									// Iterate $number
									$number++;
									// End of the Loop
									endwhile;
									?>
									</div><!-- .row -->
									<div class="pagination-box">
										<?php
										echo paginate_links(array(
											"prev_text"			=> "Página Anterior",
											"next_text"			=> "Próxima Página"
											)); ?>
									</div>
								</div><!-- .col-9 -->
								<div class="col-md-3 hidden-sm hidden-xs">
									<?php get_sidebar(); ?>
								</div><!-- .col-3 -->
							</div><!-- .row -->
						<?php 
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
