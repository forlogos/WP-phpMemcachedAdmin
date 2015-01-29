=== WP-phpMemcachedAdmin ===
Contributors: forlogos
Donate link: http://jasonjalbuena.com/donate/
Tags: memcached, memcache, server, info, statistics, cache
Requires at least: 3.9.2
Tested up to: 4.0
Stable tag: 1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Use the excellent web-based stats viewer for memcache, phpMemcachedAdmin, within WordPress. This plugin serves as a wrapper for phpMemcachedAdmin.

== Description ==

Use the excellent web-based stats viewer for memcache, phpMemcachedAdmin, within your WordPress admin. This plugin serves as a wrapper for phpMemcachedAdmin.

phpMemcachedAdmin is a graphic stand-alone administration for memcached to monitor and debug purpose. This program allows to see in real-time (top-like) or from the start of the server, stats for get, set, delete, increment, decrement, evictions, reclaimed, cas command, as well as server stats (network, items, server version) with googlecharts and server internal configuration. For more info, goto https://code.google.com/p/phpmemcacheadmin/

WP-phpMemcachedAdmin adds phpMemcachedAdmin to the wp-admin's Tools menu. Only logged-in WP admins, or a user with the manage_options capability, can view and use it. Attempts to directly view phpMemcachedAdmin by viewing its index.php file in a browser will fail.

== Installation ==

This section describes how to install the plugin and get it working.


1. Upload the `WP-phpMemcachedAdmin` folder to your `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= Do I need to have memcached on my server? =

Yes, for the plugin to be useful. This plugin will still work even if memcached is not installed, tho you won't get any memcached stats.



== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* Initial release
* includes phpMemcachedAdmin v1.2.2

== Upgrade Notice ==

= 1.0 =
Version 1. No upgrades yet.