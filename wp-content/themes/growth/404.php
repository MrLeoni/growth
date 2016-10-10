<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Growth
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404">
				<div class="container">
					<div class="not-found">
						<h1 class="page-title-404"><?php esc_html_e( '404', 'growth' ); ?></h1>
						<p>A página que você procura não existe. Deseja voltar para a <a href="<?php echo esc_html(home_url("/")); ?>" title="Home">Home</a> ?</p>
					</div>
				</div>
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
