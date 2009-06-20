<?php
/*
Plugin Name: Quotmarks Replacer
Plugin URI: http://sparanoid.com/tag/quotmarks-replacer/
Description: A plugin disables wptexturize founction that keeps all quotation marks and suspension points in half-width form. 通过禁用 wptexturize 函数，解决 WordPress 自动将半角的单引号、双引号和省略号转换为全角标点的问题。使后台输入的标点格式与前台读者浏览的标点格式保持一致。
Version: 2.2
Author: Sparanoid
Author URI: http://sparanoid.com/
*/

$qmr_work_tags = array(
	'bloginfo',
	'comment_author',
	'comment_text',
	'list_cats',
	'link_name',
	'link_description',
	'link_notes',
	'single_post_title',
	'term_name',
	'term_description',
	'the_title',
	'the_content',
	'the_excerpt',
	'wp_title',
	'widget_title'
	);

foreach ( $qmr_work_tags as $qmr_work_tag ) {
	remove_filter ($qmr_work_tag, 'wptexturize');
}

?>
