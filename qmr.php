<?php
/*
Plugin Name: Quotmarks Replacer
Plugin URI: http://sparanoid.com/tag/quotmarks-replacer/
Description: A plugin disables wptexturize founction that keeps all quotation marks and suspension points in half-width form. 通过禁用 wptexturize 函数，解决 WordPress 自动将半角的单引号、双引号和省略号转换为全角标点的问题。使后台输入的标点格式与前台读者浏览的标点格式保持一致。
Version: 2.3
Author: Sparanoid
Author URI: http://sparanoid.com/
*/

$qmr_work_tags = array(
	'the_title',
	'the_content',
	'the_excerpt',
	'comment_text',
	'list_cats',
	'single_post_title',
	'comment_author',
	'term_name',
	'link_name',
	'link_description',
	'link_notes',
	'bloginfo',
	'wp_title',
	'widget_title',
	'term_description',
	'category_description',
	'widget_text'
	);

foreach ( $qmr_work_tags as $qmr_work_tag ) {
	remove_filter ($qmr_work_tag, 'wptexturize');
}

?>
