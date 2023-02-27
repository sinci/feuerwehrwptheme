<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
		<?php
			echo '<div class="uk-margin-medium-bottom">';
			echo do_shortcode( '[ulkit_slideshow post_type=["post","einsaetze"]' );
			echo '</div>';				
		?>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */ ?>
		<div>
        <div uk-grid="masonry: true">
			<?php
			while ( have_posts() ) :
				the_post(); ?>

				<div class="uk-width-1-2@m">
				<?php

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
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
	
		<?php get_sidebar('home'); ?>
		
		</div>

	</div><!-- #primary -->
</div><!-- .uk-container -->


<?php 
get_footer();
