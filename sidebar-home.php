<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<aside id="sidebar" class="small-12 large-3 columns show-for-large-up greenbar-interior">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'home-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>