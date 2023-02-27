<?php
/**
 * Template part for displaying events posts
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
				echo '&nbsp;|&nbsp;' . get_the_term_list( $post->ID,'einsatz-category');	
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
    ?>
        
<!-- START ACF Custom Fields -->

<?php
if  ( is_singular () ) : ?>

<!-- START ACF Custom Fields -->

<div id="einsatzbox" class="uk-background-muted uk-padding-small einsatz">

	<?php if( get_field('einsatzort') ): ?>
	<?php $field = get_field_object('einsatzort'); ?>
	<p><strong><?php echo $field['label'] ?>:</strong> <?php echo $field['value'] ?></p>
	<?php endif; ?>

	<?php if( get_field('datum') ): ?>
	<?php $field = get_field_object('datum'); ?>
	<p><strong><?php echo $field['label'] ?>:</strong> <?php echo $field['value'] ?></p>
	<?php endif; ?>

	<?php if( get_field('alarmierungszeit') ): ?>
	<?php $field = get_field_object('alarmierungszeit'); ?>
	<p><strong><?php echo $field['label'] ?>:</strong> <?php echo $field['value'] ?></p>
	<?php endif; ?>

	<?php if( get_field('alarmierungsart') ): ?>
	<?php $field = get_field_object('alarmierungsart'); ?>
	<p><strong><?php echo $field['label'] ?>:</strong> <?php echo $field['value'] ?></p>
	<?php endif; ?>

	<div class="uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small" uk-grid uk-lightbox="animation: slide">

		<?php if( get_field('bild_1') ): ?>
			<div>
				<a class="uk-inline" href="<?php the_field('bild_1'); ?>">
					<img src="<?php the_field('bild_1'); ?>" />
				</a>
			</div>
		<?php endif; ?>

		<?php if( get_field('bild_2') ): ?>
			<div>
				<a class="uk-inline" href="<?php the_field('bild_2'); ?>" >
					<img src="<?php the_field('bild_2'); ?>" />
				</a>
			</div>
		<?php endif; ?>

		<?php if( get_field('bild_3') ): ?>
			<div>
				<a class="uk-inline" href="<?php the_field('bild_3'); ?>" >
					<img src="<?php the_field('bild_3'); ?>" />
				</a>
			</div>
		<?php endif; ?>

		<?php if( get_field('bild_4') ): ?>
			<div>
				<a class="uk-inline" href="<?php the_field('bild_4'); ?>" >
					<img src="<?php the_field('bild_4'); ?>" />
				</a>
			</div>
		<?php endif; ?>

		<?php if( get_field('bild_5') ): ?>
			<div>
				<a class="uk-inline" href="<?php the_field('bild_5'); ?>" >
					<img src="<?php the_field('bild_5'); ?>" />
				</a>
			</div>
		<?php endif; ?>

		<?php if( get_field('bild_6') ): ?>
			<div>
				<a class="uk-inline" href="<?php the_field('bild_6'); ?>" >
					<img src="<?php the_field('bild_6'); ?>" />
				</a>
			</div>
		<?php endif; ?>

	</div>

	<p><?php the_field( 'openstreetmap' ); ?></p>


</div><!-- .uk-background -->

<!-- END ACF Custom Fields -->

<?php endif; ?>

<!-- END ACF Custom Fields -->

        <?php

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'feuerwehrwp' ),
			'after'  => '</div>',
		) );
		?>

</article><!-- #post-<?php the_ID(); ?> -->

