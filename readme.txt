=== Plugin Name ===
Contributors: Linksku
Plugin Name: Bot Detector
Author: Linksku
Author URI: http://linksku.com/
Requires at least: 2.1
Tested up to: 3.0.3
Stable tag: 2.0
Version: 2.0
Tags: detect, bot, robot, bots, seo, google, plugin, function
Donate link: http://linksku.com/

== Description ==

This lightweight plugin allows you to detect bots (also known as crawlers or spiders) on your website. This allows you to cloak (hide stuff from or show stuff to search engine bots such as the Google Bot).


To use, simply call the function, `is_bot()`.

For example, you can use:
`if ( is_bot() ) {
    // Content with a high keyword density
} else {
    // Login, ads, Javascript, etc
}`

*** Please note: Please do not use this plugin for unethical purposes such as keyword stuffing ***
*** There was a major error with Version 1 (hence the low rating). Version 2 of this plugin works flawlessly. ***

== Installation ==

1. Upload `bot-detect` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Enjoy :)

== Frequently Asked Questions ==

= How will cloaking benefit me? =
Search engines (such as Google) use many factors to determine if your website/blog with appear first on their listings. Some these factors are:
* Keywords - You can show extra keywords to Search Engines with this plugin.
* Speed - Don't load Javascript or CSS if it's a Seach Engine. These will not improve your ranking, it will decrease your ranking because it takes longer for your blog to load.
* Links - Remove external links for Search Engines to maintain your PageRank inside your own blog.

= How do I detect bots? =
Simply use `is_bot()` or `!is_bot()` anywhere in your blog.

== Changelog ==

2.0

* Fixed fatal error bug

1.0

* Initial version