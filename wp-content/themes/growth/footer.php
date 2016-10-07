<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Growth
 */
 
	$footer_posts_args = array(
		"posts_per_page" => 4,
	);
	$footer_posts_query = new WP_Query( $footer_posts_args );

?>

	</div><!-- #page -->
	
	<footer id="footer">
		
		<?php get_sidebar("instagram"); ?>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-4 footer-about">
					<h4 class="widget-title">Sobre nós</h4>
					<img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/logo/growth-blog-footer-logo.svg" alt="Growth">
					<?php get_sidebar("footer"); ?>
					<a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#" target="_blank" title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				</div>
				<div class="col-sm-8">
					<h4 class="widget-title">Posts Recentes</h4>
					<div class="row">
						
						<?php
							// Check if there is any post to display
							if($footer_posts_query->have_posts()):
							// Creating a anchor number to determine the position of the post inside the loop
							$post_number = 0;
							// Starting the Loop
							while($footer_posts_query->have_posts()): $footer_posts_query->the_post();
								// Get posts ID number
								$post_id = get_the_ID(); ?>
								<div class="col-sm-6">
								<?php 
								// Check to see if the post is the number 1 or 2 inside the loop
								// Do this for diferent box style
								if($post_number < 2) :
									echo '<div class="footer-post-box" style="border-bottom: 1px solid #333; padding-bottom: 20px;">';
								else :
									echo '<div class="footer-post-box" style="margin-top: 20px;">';
								endif;
								?>
										<div class="row">
											<div class="col-xs-4">
												<?php the_post_thumbnail("thumbnail"); ?>
											</div>
											<div class="col-xs-8">
												<?php the_title("<h5 class='footer-title'><a href='".get_the_permalink()."' title='".get_the_title()."'>","</a></h5>"); ?>
												<div class="entry-meta">
													<?php
														echo "<p><i class='ion-ios-person'></i>".get_the_author()."</p>";
														echo "<p><i class='ion-ios-clock'></i>".get_the_date("j F", $post_id)."</p>";
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php
							// Iterate anchor number
							$post_number++;
							// Ending Loop
							endwhile;
							// Reset post data, used in custom queryied loops
							wp_reset_postdata();
							
							// Basic fallback if there isn't any post to display
							else:
								echo "<div class='basic-fallback'><h4>Você ainda não tem nenhum post publicado, Crie um post para ele aparecer aqui. Essa mensagem será desativada automaticamente quando existir algum post para ser mostrado nessa área.</h4></div>";
							// End if
							endif;
						?>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="copy">
			<div class="container">
				<p>&copy; Copyright 2016 - Growth Supplements <span class="delucca"><a href="http://agenciadelucca.com.br" target="_blank" title="Agência Delucca">Agência Delucca</a></span></p>
			</div>
		</div>
		
	</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/jquery-1.12.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
