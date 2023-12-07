<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package feuerwehrwp2
 */

?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="uk-container">

		<div uk-grid>
			<div class="uk-width-1-3@m">
				<?php 
					if( is_active_sidebar( 'footer-1' ) ){
						dynamic_sidebar( 'footer-1' );
					}
				?>
			</div>
			<div class="uk-width-1-3@m">
				<?php 
					if( is_active_sidebar( 'footer-2' ) ){
						dynamic_sidebar( 'footer-2' );
					}
				?>
			</div>
			<div class="uk-width-1-3@m">
				<?php 
					if( is_active_sidebar( 'footer-3' ) ){
						dynamic_sidebar( 'footer-3' );
					}
				?>
			</div>
		</div>

		<div class="uk-flex uk-flex-center">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'uk-navbar-nav' ) ); ?>
		</div>

		<div class="site-info uk-float-right">
				<small><?php themename_credits(); ?></small>
		</div><!-- .site-info -->

		</div>

	</footer><!-- #colophon -->

	<?php wp_footer(); ?>

	<!-- Offcanvas Bar -->
	<div id="offcanvas-slide" uk-offcanvas="overlay: true">
		<div class="uk-offcanvas-bar">
		<button class="uk-offcanvas-close" type="button" uk-close></button>
		<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'uk-nav uk-nav-default' ) ); ?>
		</div>
	</div>

</div><!-- #page -->

</body>
</html>
