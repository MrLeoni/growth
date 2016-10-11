<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Growth
 * [0] -> A
 * [1] -> Destaque
 * [2] -> Notícias
 */
 
 // Get post ID
 $post_ID = get_the_ID();
 
 // Using $post_id to retrive post category terms
 $post_cat = get_the_category( $post_ID );
 
 // If post is in "Destaque" category
 // we will ignore this category and find another one to use as a query parameter to "Posts Relacionado"
 foreach ($post_cat as $cat) {
	if($cat->name == "Destaque") {
	   // Empty
	 } else {
		 $cat_name = $cat->name;
	 }
 }
 
 // Using $cat_name to get post category ID
 $post_cat_ID = get_cat_ID("$cat_name");
 
 // Using $post_cat_ID to query posts in same category and display them in "Posts Relacionados"
 $related_posts_args = array(
	"cat"	=> "$post_cat_ID",
	"post__not_in"	=> array( $post_ID ), /* Exclude current post form "Posts Relacionados" */
	"posts_per_page"	=> 3,
 );
 
 $related_posts_query = new WP_Query( $related_posts_args );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-title">
			<?php
			if ( is_single() ) : 
				the_post_thumbnail("full");
				the_title( '<h1 class="single-post-title">', '</h1>' );
			else :
				the_title( '<h2 class="single-post"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
		</div>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php	echo "<p><i class='fa fa-user' aria-hidden='true'></i>".get_the_author()."</p>";
			echo "<p><i class='ion-ios-clock'></i>".get_the_date("j F")."</p>"; ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'growth' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="post-tags">
			<p>Tags</p><?php the_tags("", " ", ""); ?>
		</div>
		<div class="pagination-box-post">
			<?php the_post_navigation(array(
				"prev_text"	=> "<p>Post Anterior</p><p class='nav-post-title'>%title</p>",
				"next_text"	=> "<p>Próximo Post</p><p class='nav-post-title'>%title</p>"
			)); ?>
		</div>
		<div class="posts-relacionados clearfix">
			<?php
				if($related_posts_query->have_posts()):
					echo "<h4>Posts Relacionados</h4>";
					while( $related_posts_query->have_posts() ): $related_posts_query->the_post(); ?>
						<a class="posts-relacionados-link" href="<?php the_permalink(); ?>" title="<?php get_the_title ?>">
							<?php	the_post_thumbnail("medium"); ?>
							<div class="posts-relacionados-info">
								<?php
								the_title("<h5>", "</h5>");
								echo "<p><i class='fa fa-user' aria-hidden='true'></i>".get_the_author()."</p>";
								echo "<p><i class='ion-ios-clock'></i>".get_the_date()."</p>";
								?>
							</div>
						</a>
					<?php endwhile;
					wp_reset_postdata();
				else:
					// Empty
				endif;
			?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
