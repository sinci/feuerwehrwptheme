<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package feuerwehrwp2
 */

get_header();
?>

<div class="uk-container uk-margin-top uk-margin-bottom">

		<?php if ( is_active_sidebar( 'sidebar-page' ) ) { ?>
		<div id="primary" class="content-area" uk-grid>
			<main id="main" class="uk-width-3-4@m">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			<?php get_sidebar('page'); ?>
		</div><!-- #primary -->

		<?php
		} else { ?>
	
			<div id="primary" class="content-area" uk-grid>
				<main id="main" class="uk-width-1-1@m">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		<?php } ?>

</div><!-- .uk-container -->

<?php
get_footer();
