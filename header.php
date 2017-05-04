<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package desher-khobor
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta name="description" content="Innovi is an advertising agency, providing outstanding graphics design, printing and advertising services at an affordable price." />
        <meta name="keywords" content="innovi, innovi bangladesh, graphics design, logo design, business card design, business card print, quality business card print dhaka, banner print, advertisement, advertisement design, advertising dhaka, bangladesh graphics design, printing services dhaka, cheap printing services bangladesh, design firm bangladesh, advertising firm bangladesh" />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="Innovi">

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="favicon.png">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

        <!-- modernizr
        ================================================== -->
        <script type="text/javascript" src="js/modernizr.custom.js"></script>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div id="page" class="site container">


            <header id="masthead" class="site-header row" role="banner">
                <div class="header-top col-sm-12">
                    <?php get_template_part( 'template-parts/header/header', 'top' ); ?>
                </div> <!-- .header-top -->

                <div class="site-branding col-sm-12">


                    <div class="custom-header-media">
                        <!-- <?php the_custom_header_markup(); ?> -->
                    </div>

                    <?php
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                    <?php
                    endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <h6 class="site-description"><?php echo $description; ?></h6>
                    <?php
                    endif; ?>
                </div><!-- .site-branding -->

                <div class="col-sm-12">
                    <div class="row">

                    </div>
                </div>

                <?php if ( has_nav_menu( 'primary' ) ) : ?>

                <?php endif; ?>
            </header> <!-- #masthead -->

            <div id="content" class="site-content row">
