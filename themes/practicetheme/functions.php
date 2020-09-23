<?php


// Custom Post Types

function practicetheme_custom_post_type()
{
    $args = array(


        'labels' => array(
            'name' => 'books',
            'singular_name' => 'book',
            'menu_name' => 'Books'
        ),
        'hierarchical' => false,
        'public' => true,
        'menu_icon' => 'dashicons-book-alt',
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('books', $args);
}
add_action('init', 'practicetheme_custom_post_type');



// Custom taxonomies

function practicetheme_custom_taxonomy()
{

    $args = array(

        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category'
        ),

        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('category', array('books'), $args);
}

add_action('init', 'practicetheme_custom_taxonomy');