<?php

    // Load CSS
    function innovi_load_styles() {
        // Register Styles
        wp_register_style('font-awesome_style', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_register_style('innovi_main_style', get_template_directory_uri() . '/assets/styles/main.css');

        wp_register_style('jquery-multiscroll', get_template_directory_uri() . '/css/jquery.multiscroll.css');
        wp_register_style('style-intro', get_template_directory_uri() . '/css/style-intro.css');
        wp_register_style('retina', get_template_directory_uri() . '/css/retina.css');

        // Enqueue Styles
        wp_enqueue_style( 'innovi-style', get_stylesheet_uri() );
        wp_enqueue_style( 'font-awesome_style' );
        wp_enqueue_style( 'innovi_main_style' );
        wp_enqueue_style( 'jquery-multiscroll' );
        wp_enqueue_style( 'style-intro' );
        wp_enqueue_style( 'retina' );
    }
    add_action('wp_enqueue_scripts', 'innovi_load_styles');

    // Load Javascript
    function innovi_load_scripts() {

        wp_deregister_script( 'jquery' );
        wp_deregister_script( 'jquery-migrate.min' );

        wp_register_script('jquery', ("//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"), false, '1.12.4', true);
        wp_register_script('jquery-migrate.min', ("//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"), false, '1.4.1', true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-migrate.min');

        // Bootstrap
        wp_register_script('bootstrap-scripts', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), null, true);
        wp_enqueue_script('bootstrap-scripts');

        wp_register_script('retina', get_template_directory_uri() . '/js/retina-1.1.0.min.js', array('jquery'), null, true);

        wp_register_script('royal_preloader', get_template_directory_uri() . '/js/royal_preloader.min.js', array('jquery'), null, true);

        wp_register_script('jquery.easings', get_template_directory_uri() . '/js/jquery.easings.min.js', array('jquery'), null, true);

        wp_register_script('jquery.multiscroll', get_template_directory_uri() . '/js/jquery.multiscroll.js', array('jquery'), null, true);

        wp_register_script('classie', get_template_directory_uri() . '/js/classie.js', array('jquery'), null, true);

        wp_register_script('uiMorphingButton_fixed', get_template_directory_uri() . '/js/uiMorphingButton_fixed.js', array('jquery'), null, true);

        wp_register_script('flippy', get_template_directory_uri() . '/js/flippy.js', array('jquery'), null, true);

        wp_register_script('', get_template_directory_uri() . '/js/.js', array('jquery'), null, true);

        wp_register_script('gmaps', get_template_directory_uri() . '/js/gmaps.js', array('jquery'), null, true);

        wp_register_script('template-intro', get_template_directory_uri() . '/js/template-intro.js', array('jquery'), null, true);

        // Custom Scripts
        wp_register_script('innovi_custom_script', get_template_directory_uri() . '/assets/scripts/script.js', array('jquery'), null, true);
        wp_enqueue_script('innovi_custom_script');

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action('wp_enqueue_scripts', 'innovi_load_scripts');
?>
