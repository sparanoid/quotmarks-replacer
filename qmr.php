<?php
/*
Plugin Name: Quotmarks Replacer
Plugin URI: http://sparanoid.com/work/quotmarks-replacer/
Description: A plugin disables wptexturize founction that keeps all quotation marks and suspension points in half-width form.
Version: 2.6.1
Author: Sparanoid
Author URI: http://sparanoid.com/
*/

$qmr_work_tags = array(
  'the_title',        // http://codex.wordpress.org/Function_Reference/the_title
  'the_content',        // http://codex.wordpress.org/Function_Reference/the_content
  'the_excerpt',        // http://codex.wordpress.org/Function_Reference/the_excerpt
  // 'list_cats',       Deprecated. http://codex.wordpress.org/Function_Reference/list_cats
  'single_post_title',    // http://codex.wordpress.org/Function_Reference/single_post_title
  'comment_author',     // http://codex.wordpress.org/Function_Reference/comment_author
  'comment_text',       // http://codex.wordpress.org/Function_Reference/comment_text
  // 'link_name',       Deprecated.
  // 'link_notes',      Deprecated.
  'link_description',     // Deprecated, but still widely used.
  'bloginfo',         // http://codex.wordpress.org/Function_Reference/bloginfo
  'wp_title',         // http://codex.wordpress.org/Function_Reference/wp_title
  'term_description',     // http://codex.wordpress.org/Function_Reference/term_description
  'category_description',   // http://codex.wordpress.org/Function_Reference/category_description
  'widget_title',       // Used by all widgets in themes
  'widget_text'       // Used by all widgets in themes
  );

foreach ( $qmr_work_tags as $qmr_work_tag ) {
  remove_filter ($qmr_work_tag, 'wptexturize');
}

?>