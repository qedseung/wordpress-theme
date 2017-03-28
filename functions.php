<?php
    function enque_styles(){
        wp_enqueue_style('custom', get_template_directory_uri().'/css/w3.css');
    }
    function disable_wp_emojicons() {
      // all actions related to emojis
      remove_action( 'admin_print_styles', 'print_emoji_styles' );
      remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
      remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
      remove_action( 'wp_print_styles', 'print_emoji_styles' );
      remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
      remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
      remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
      // filter to remove TinyMCE emojis
      add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
    }
    //if ( ! function_exists( 'mytheme_setup' ) ) :
    function mytheme_setup() {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array ( 'gallery', 'quote', 'image', 'video' ) );
        }
    //endif;
    
    add_action( 'after_setup_theme', 'mytheme_setup' );
    add_action( 'init', 'disable_wp_emojicons' );
    add_action('wp_enqueue_scripts','enque_styles');
    
?>