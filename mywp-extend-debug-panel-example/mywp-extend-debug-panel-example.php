<?php
/*
Plugin Name: My WP Debug Panel Extends Example
Plugin URI: https://mywpcustomize.com/document/mywp-shortcode-extends-class/
Description: My WP Debug Panel Extends Example
Version: 1.0
Author: gqevu6bsiz
Author URI: http://gqevu6bsiz.chicappa.jp/
Requires at least: 4.6
Tested up to: 4.8
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

add_filter( "mywp_debug_types" , "example_mywp_debug_types" );

function example_mywp_debug_types( $debug_types ) {

  // Debug Tab ID = Debug Tab Label
  $debug_types["example"] = __( "Example" );

  return $debug_types;

}

add_filter( "mywp_debug_renders" , "example_mywp_debug_renders_1" );

function example_mywp_debug_renders_1( $debug_renders ) {

  /*
  $debug_renders[" debug_renders_id "] = array(
    "debug_type" => " debug_tab_id ",
    "title" => " debug_content_title ",
  );
  */

  // $debug_renders key is unique
  $debug_renders["example_1"] = array(
    "debug_type" => "example", // Debug Tab ID
    "title" => __( "Example 1" ), // Debug Content Title
  );

  return $debug_renders;

}

add_filter( "mywp_debug_renders" , "example_mywp_debug_renders_2" );

function example_mywp_debug_renders_2( $debug_renders ) {

  // $debug_renders key is unique
  $debug_renders["example_2"] = array(
    "debug_type" => "example", // Debug Tab ID
    "title" => __( "Example 2" ), // Debug Content Title
  );

  return $debug_renders;

}

add_action( "mywp_debug_render_example_1" , "example_mywp_debug_render_example_1" );

function example_mywp_debug_render_example_1() {

  echo "This content is Example 1";

}

add_action( "mywp_debug_render_example_2" , "example_mywp_debug_render_example_2" );

function example_mywp_debug_render_example_2() {

  echo "This content is Example 2";

}
