<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Growth
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="blog">
				<div class="container">
					<?php
						if ( !have_posts() ) :
							// get_template_part( "template-parts/content", "destaques"); ?>
							<div class="row">
								<div class="col-md-9">
									<div class="row">
									<?php 
									// $number to count post position
									$number = 0;
									// Start the Loop
									while(have_posts()): the_post();
										/**
										 * If a post is the first in query
										 * He will be .col-sm-12 wide
										 */
										if ($number === 0 && !is_paged()): ?>
											<div class='col-xs-12 col-sm-12 post-highlight'>
												<?php the_post_thumbnail("large"); ?>
												<div class="blog-post-tags">
													<?php the_tags("", " ", ""); ?>
												</div>
												<?php	the_title("<h2>", "</h2>"); ?>
												<div class="highlight-meta">
													<?php echo "<p><i class='ion-ios-person'></i>".get_the_author()."</p>";
													echo "<p><i class='ion-ios-clock'></i>".get_the_date("j F")."</p>"; ?>
												</div>
												<?php the_excerpt(); ?>
												<a class="read-more-btn" href="<?php the_permalink(); ?>" title="<?php echo get_the_title() ?>">Continuar Lendo</a>
												<div class="post-separator"><!-- empty --></div>
											</div>
										<?php // Others posts are .col-sm-6 wide
										else: ?>
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
										// Endif
										endif;
									// Iterate $number
									$number++;
									// End of the Loop
									endwhile;
									?>
									</div><!-- row2 -->
									<div class="pagination-box">
										<?php
										echo paginate_links(array(
											"prev_text"			=> "Página Anterior",
											"next_text"			=> "Próxima Página"
											)); ?>
									</div>
								</div><!-- col-9 -->
								<div class="col-md-3 hidden-sm hidden-xs">
									<?php get_sidebar(); ?>
								</div><!-- col-3 -->
							</div><!-- row -->
						<?php 
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>	
				</div> <!-- container -->
			</section><!-- blog -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
