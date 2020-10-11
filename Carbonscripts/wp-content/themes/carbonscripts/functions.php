<?php

    function carbonscripts_script_enqueue() {

        wp_enqueue_style('cs_customstyle', get_template_directory_uri().'/assets/css/carbonscripts.css', array(), '1.0.0', 'all');

        wp_enqueue_script('cs_customjs', get_template_directory_uri() . '/assets/js/carbonscripts.js', array(), '1.0.0', true);
        wp_enqueue_script('cs_particlejs', get_template_directory_uri() . '/assets/js/particles.js', array(), '1.0.0', true);
        wp_enqueue_script('cs_appjs', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true);

    }

    add_action('wp_enqueue_scripts', 'carbonscripts_script_enqueue');

    function carbonscripts_theme_setup() {

        // add_theme_support('menus');
        add_theme_support( 'custom-header' );

        register_nav_menu('primary', 'Header Navigation');
        register_nav_menu('secondary', 'Footer Navigation');
        // register_nav_menu('tertiary', 'Mobile Navigation');

    }

    add_action('after_setup_theme', 'carbonscripts_theme_setup'); //add_theme_support(); //1st way - after theme setup
    // add_action('init', 'carbonscripts_theme_setup'); //2nd way - after initialization

?>