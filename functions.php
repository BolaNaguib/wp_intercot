<?php
// add theme styles 
add_theme_support('post-thumbnails');

include 'functions/add_theme_styles.php';
include 'functions/add_gutenberg.php';
include 'functions/add_acf_settings.php';
include 'functions/add_single_template.php';
include 'functions/new_breadcrumbs.php';

include 'functions/add_breadcrumbs.php';



/**
 * Check if given term has child terms
 *
 * @param Integer $term_id
 * @param String $taxonomy
 *
 * @return Boolean
 */
function category_has_children( $term_id = 0, $taxonomy = 'category' ) {
    $children = get_categories( array( 
        'child_of'      => $term_id,
        'taxonomy'      => $taxonomy,
        'hide_empty'    => false,
        'fields'        => 'ids',
    ) );
    return ( $children );
}