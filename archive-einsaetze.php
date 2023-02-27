<?php
/**
 * The template for displaying archive-einsaetze pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package feuerwehrwp2
 */

get_header();
?>
<div class="uk-container uk-margin-top uk-margin-bottom">
	<div id="primary" class="content-area" uk-grid>
		<main id="main" class="uk-width-3-4@m">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->


		<div>
			<div uk-grid="masonry: true">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post(); ?>

					<div class="uk-width-1-2@m">
					<?php
						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content-einsaetze', get_post_type() );

					?>
					</div>
			<?php endwhile; ?>
			</div>
		</div>

		<ul class="uk-pagination">
			<li><?php previous_posts_link( __( '<span class="uk-margin-small-right" uk-pagination-previous></span>' . "Vorherige Seite", 'feuerwehrwp' ) ); ?></li>
			<li  class="uk-margin-auto-left"><?php next_posts_link( __( "Nächste Seite" . '<span class="uk-margin-small-left" uk-pagination-next></span>', 'feuerwehrwp' ) ); ?></li>
		</ul>

		<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->

		<?php get_sidebar('einsatz'); ?>

	</div><!-- #primary -->
</div><!-- .uk-container -->

<?php 
get_footer();