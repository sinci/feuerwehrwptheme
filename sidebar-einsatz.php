<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package feuerwehrwp2
 */

// Checks if there's a widget area with id sidebar-einsaetze
if( is_active_sidebar( 'sidebar-einsatz' ) ){ ?>
	<div class="uk-width-1-4@m">
	<?php dynamic_sidebar( 'sidebar-einsatz' ); ?>
	</div>	
<?php } ?>