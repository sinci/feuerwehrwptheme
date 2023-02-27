<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package feuerwehrwp2
 */

?>

<article id="post-<?php the_ID(); ?>" class="uk-article" <?php post_class(); ?>>

<header class="entry-header">
	<?php
		if ( is_singular() ) :
			the_title( '<h1 class="uk-h2">', '</h1>' );
		else :
			the_title( '<h2 class="uk-h3 uk-margin-remove-bottom"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( array ('post','events','einsaetze' === get_post_type('') ) ):
			?>
			<div class="uk-article-meta uk-margin-bottom">
				<?php
				echo get_the_date();
				//echo '&nbsp;|&nbsp;' . get_the_term_list( $post->ID,'event-category');
				//echo '' . get_the_term_list( $post->ID,'einsatz-category');	
				feuerwehrwp_entry_footer();
				?>
			</div><!-- .entry-meta -->
	<?php endif; ?>
</header><!-- .entry-header -->

<?php feuerwehrwp_post_thumbnail(); ?>

		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				
				__( 'Continue reading<span class="screen-reader-text"></span>', 'feuerwehrwp' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		if (is_singular('post')) {
			$tags = get_the_tags();
			if ($tags) {
			   echo '<p><strong>Schlagwörter:</strong> ';
			   $tag_count = count($tags);
			   $i = 0;
			   foreach($tags as $tag) {
				  $i++;
				  echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
				  if ($i < $tag_count) {
					 echo ', ';
				  }
			   }
			   echo '</p>';
			}
		 }

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'feuerwehrwp' ),
			'after'  => '</div>',
		) );
		?>
	

</article><!-- #post-<?php the_ID(); ?> -->

