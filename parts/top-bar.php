<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>




<div class="top-bar-container contain-to-grid show-for-medium-up">
   
    <nav>
		<div class="top-bar" data-topbar role="navigation">

      
        <div class="title-area">
	      <div class="logo">
                <h1><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/
assets/img/sandymoor-logo-big.png"></a></h1>
            </div>
        </div>
        
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
        </section>
    </nav>
</div>



