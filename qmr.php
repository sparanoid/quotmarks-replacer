<?php
/*
Plugin Name: Quotmarks Replacer
Plugin URI: http://sparanoid.com/tag/quotmarks-replacer/
Description: A plugin disables wptexturize founction that keeps all quotation marks and suspension points in DBC case. 通过禁用 wptexturize 函数，解决 WordPress 自动将半角的单引号、双引号和省略号转换为全角标点的问题。使后台输入的标点格式与前台读者浏览的标点格式保持一致。
Version: 2.1.1
Author: Sparanoid
Author URI: http://sparanoid.com/
*/

/*
Following is the old way to replace the wptexturized contents:

function qmr_replace($the_content) {
    $the_content = str_replace("&#8220;", "&quot;", $the_content);
    $the_content = str_replace("&#8221;", "&quot;", $the_content);
    $the_content = str_replace("&#8243;", "&quot;", $the_content);
    $the_content = str_replace("&#8216;", "'", $the_content);
    $the_content = str_replace("&#8217;", "'", $the_content);
    $the_content = str_replace("&#8242;", "'", $the_content);
    $the_content = str_replace("&#8230;", "...", $the_content);
    $the_content = str_replace("&#8211;", "--", $the_content);
    $the_content = str_replace("&#8212;", "---", $the_content);
	return $the_content;
}

function qmr_filter($content) {
	return qmr_replace($content);
}

add_filter ('bloginfo','qmr_filter');
add_filter ('the_title','qmr_filter');
add_filter ('the_content','qmr_filter');
add_filter ('the_excerpt','qmr_filter');
add_filter ('category_description','qmr_filter');
add_filter ('comment_author','qmr_filter');
add_filter ('comment_excerpt','qmr_filter');
add_filter ('comment_text','qmr_filter');
add_filter ('list_cats','qmr_filter');
add_filter ('single_post_title','qmr_filter');


// This is a new way to remove the wptexturize filter:
remove_filter ('bloginfo','wptexturize');
remove_filter ('the_title','wptexturize');
remove_filter ('the_content','wptexturize');
remove_filter ('the_excerpt','wptexturize');
remove_filter ('category_description','wptexturize');
remove_filter ('comment_author','wptexturize');
remove_filter ('comment_excerpt','wptexturize');
remove_filter ('comment_text','wptexturize');
remove_filter ('list_cats','wptexturize');
remove_filter ('single_post_title','wptexturize');
*/

// This is a new way to remove the wptexturize filter:
$qmr_work_tags = array(
	'bloginfo',
	'comment_author',
	'comment_text',
	'comment_excerpt',
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
	'wp_title'
	);

foreach ( $qmr_work_tags as $qmr_work_tag ) {
	remove_filter ($qmr_work_tag, 'wptexturize');
}

?>
