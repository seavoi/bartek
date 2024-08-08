<?php

// Enqueue Styles
function frontend_style() {
 wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), date('mdygi'), 'all' );
 wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), date('mdygi'), 'all' );
}


// Enqueue Scripts
if (!is_admin()) {
 wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), date('mdygi'),  true);
 wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts-min.js', array(), date('mdygi'),  true);
}

add_action( 'wp_enqueue_scripts', 'frontend_style' );

function my_plugin_body_class($classes) {
    $classes[] = 'foo';
    return $classes;
}

add_filter('body_class', 'my_plugin_body_class'); 

// WooCommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' ); 
}

// Processes the shortcode attributes if the 'facetwp' shortcode attribute is present
add_filter( 'shortcode_atts_products', function( $out, $pairs, $atts, $shortcode ) {
  if ( $shortcode == 'products' && in_array( 'facetwp', $atts ) ) {
    $out['facetwp'] = true;
    $out['class']   = 'facetwp-template';
    $out['cache']   = false; // Bust WooCommerce caching
  }
  return $out;
}, 10, 4 );
 
// Adds query arguments for FacetWP
add_filter( 'woocommerce_shortcode_products_query', function( $query_args, $attributes ) {
  if ( isset( $attributes['facetwp'] ) ) {
    $query_args['facetwp']  = true;
    $query_args['wc_query'] = 'product_query';
 
    // Optionally set 'posts_per_page' (or use the products shortcode's 'limit' attribute)
    // $query_args['posts_per_page'] = 8;
 
    // Optionally set 'orderby' and 'order' (or use the products shortcode's 'orderby' attribute)
    // $query_args['orderby'] = 'date';
    // $query_args['order'] = 'DESC';
  }
  return $query_args;
}, 10, 2 );
 
// Fixes pagination incompatibilities
add_filter( 'woocommerce_shortcode_products_query_results', function( $results, $shortcode ) {
  $attributes = $shortcode->get_attributes();
  if ( isset( $attributes['facetwp'] ) && $attributes['paginate'] == false ) {
    $count                 = count( $results->ids );
    $results->total        = $count;
    $results->total_pages  = 1;
    $results->current_page = 1;
  } 
  elseif ( isset( $attributes['facetwp'] ) && $attributes['paginate'] == true ) {
    $results->total        = FWP()->facet->query->found_posts;
    $results->total_pages  = FWP()->facet->query->max_num_pages;
  }
  return $results;
}, 10, 2 );

function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; 
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
