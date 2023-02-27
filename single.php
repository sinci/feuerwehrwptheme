<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package feuerwehrwp2
 */

get_header();
?>

<div class="uk-container uk-margin-top uk-margin-bottom">

		<div id="primary" class="content-area" uk-grid>
		
		<?php if ( is_active_sidebar( 'sidebar-home') ) { ?>

			<main id="main" class="uk-width-3-4@m">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->

			<?php get_sidebar('home'); ?>

		</div><!-- #primary -->

	
		
<?php
} else { ?>

<div id="primary" class="content-area" uk-grid>
	<main id="main" class="uk-width-1-1@m">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

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
