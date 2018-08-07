<?php

  function my_files() {

    wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-fonts',  '//fonts.googleapis.com/css?family=Jesefine+Splab|Lobster|Raleway:400,900');
    wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style('animate-css', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css');
    wp_enqueue_style('
    my_main_styles', get_stylesheet_uri());


    wp_enqueue_script('jquery-slim', '//code.jquery.com/jquery-3.2.1.slim.js', NULL, '1.0', true);

    wp_enqueue_script('popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', NULL, '1.0', true);

    wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', NULL, '1.0', true);

    wp_enqueue_script('main-scripts', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);

  };

add_action('wp_enqueue_scripts', 'my_files');

?>
