<?php
/**
 * Displays top header
 *
 * @package Desher_Khobor
 * @version 1.0
 */

?>
<div class="row top-bar-content">
    <div class="col-md-3">

    </div>

    <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

    <div class="col-md-3 <?php if ( ! has_nav_menu( 'top' ) ) : ?> col-md-offset-6 <?php endif; ?>">
        <div class="social-links pull-right">
            <?php innovi_show_social_icons(); ?>
        </div>
    </div>
</div> <!-- .top-header-bar -->
