<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Growth
 */

?>

<div class="row">
	<div class="col-sm-12">
		<section class="no-results not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Nada por aqui...', 'growth' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<?php
				if (is_home() || is_archive()) : ?>
					<p><?php esc_html_e( 'Parece que ainda não temos nenhum conteúdo para exibir nessa área do site.', 'growth' ); ?></p>
				<?php elseif ( is_search() ) : ?>
					<p><?php esc_html_e( 'Desculpe, mas nada que você pesquisou foi encontrado, tente novamente usando palavras diferentes.', 'growth' ); ?></p>
					<div class="search-box">
						<?php get_search_form(); ?>
					</div>
				<?php else : ?>
					<p><?php esc_html_e( 'Parece que não conseguimos encontrar o que você procura. Talvez uma pesquisa ajude?', 'growth' ); ?></p>
					<div class="search-box">
						<?php get_search_form(); ?>
					</div>
				<?php endif; ?>
			</div><!-- .page-content -->
		</section><!-- .no-results -->
	</div>
</div>
