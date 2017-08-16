<?php

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if( ! class_exists( 'MywpShortcodeAbstractModule' ) ) {
  return false;
}

if ( ! class_exists( 'MywpShortcodeModuleExample' ) ) :

final class MywpShortcodeModuleExample extends MywpShortcodeAbstractModule {

  protected static $id = 'mywp_example';

  public static function do_shortcode( $atts , $content = false , $tag ) {

    $content = "example";

    return $content;

  }

}

MywpShortcodeModuleExample::init();

endif;
