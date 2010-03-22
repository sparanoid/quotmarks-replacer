=== Quotmarks Replacer ===
Contributors: Sparanoid
Donate link: http://sparanoid.com/tag/quotmarks-replacer/
Tags: admin, administration, comment, comments, content, contents, excerpt, feed, feeds, html, page, pages, plugin, plugins, post, posts, template, text, title, writing, wptexturize, wpmu
Requires at least: 1.5
Tested up to: 2.9.2
Stable tag: 2.3

Quotmarks Replacer is a plugin disables wptexturize founction that keeps all quotation marks and suspension points in half-width form.

== Description ==
Quotmarks Replacer is a plugin disables wptexturize founction that keeps all quotation marks and suspension points in half-width form. Also this plugin works fine with WordPress Mu.

Quotmarks Replacer 通过禁用 wptexturize 函数，解决 WordPress 自动将半角的单引号、双引号和省略号转换为全角标点的问题。使后台输入的标点格式与前台读者浏览的标点格式保持一致。并且对 WordPress 有良好的支持。

Screenshots

[http://lib.sparanoid.com/qmr01.jpg](http://lib.sparanoid.com/qmr01.jpg)

[http://lib.sparanoid.com/qmr02.jpg](http://lib.sparanoid.com/qmr02.jpg)

[http://lib.sparanoid.com/qmr03.jpg](http://lib.sparanoid.com/qmr03.jpg)

== Installation ==

For WordPress:

1. Extract .zip file to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

For WordPress Mu:

1. Extract .zip in the `/wp-content/mu-plugins/` directory
2. That's all.

Or:

1. Extract .zip in the `/wp-content/plugins/` directory
2. Wait for your bloggers to choose whether activate it or not.

== Changelog ==  

= 2.3 =  
* More tags added
* qmr.gif removed

= 2.2 =  
* Added working tag widget_title
* Removed working tag comment_excerpt

= 2.1 =  
* Now 2.1 now is compatible with WordPress up to v2.8.x, Thanks to MoontoC, great help.

= 2.0 =  
* Now 2.0 use remove_filter make it works, instead of using add_filter to replace the wptexturized text.

= 1.2 =  
* Added filter single_post_title (Thanks to yskin)

= 1.1 =  
* More filters are added (category_description, comment_author, comment_excerpt, list_cats)

= 1.0.5 =  
* Error in converting #8211 and #8212.

= 1.0.4 =  
* Error in converting #8243. (Thanks to Erac)

= 1.0.3 =  
* Error in converting multiple quotation marks. (Thanks to herllin)

= 1.0.2 =  
* New feature: Convert suspension points(…) into DBC case. (Thanks to Zeax)

= 1.0.1 =  
* Error in mistaking converting blog title into DBC case. (Thanks to raenoll)

= 1.0 =  
* first release

Complete Version History available at the plugin's page:
[Quotmarks Replacer History](http://sparanoid.com/project/quotmarks-replacer/)

完整历史更新请访问插件页面：
[Quotmarks Replacer 历史更新](http://sparanoid.com/project/quotmarks-replacer/)

== Screenshots ==

Please visit the [Description](http://wordpress.org/extend/plugins/quotmarks-replacer/) tab

== Frequently Asked Questions ==

None. If you have any question, go [here](http://sparanoid.com/tag/quotmarks-replacer/)
