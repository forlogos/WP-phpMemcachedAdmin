# WP-phpMemcachedAdmin

## Introduction

Use the excellent web-based stats viewer for memcache, phpMemcachedAdmin, within your WordPress admin. This plugin serves as a wrapper for phpMemcachedAdmin.

phpMemcachedAdmin is a graphic stand-alone administration for memcached to monitor and debug purpose. This program allows to see in real-time (top-like) or from the start of the server, stats for get, set, delete, increment, decrement, evictions, reclaimed, cas command, as well as server stats (network, items, server version) with googlecharts and server internal configuration. For more info, goto https://code.google.com/p/phpmemcacheadmin/

WP-phpMemcachedAdmin adds phpMemcachedAdmin to the wp-admin's Tools menu. Only logged-in WP admins, or a user with the manage_options capability, can view and use it. Attempts to directly view phpMemcachedAdmin by viewing its index.php file in a browser will fail.

## Requirements

1. WordPress
1. memcached installed on server

## Installation

1. Upload the `WP-phpMemcachedAdmin` folder to your `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

# # NOTES

1. As this plugin only serves as a wrapper for phpMemcachedAdmin, support and bugfixes for this plugin will only be done for how this plugin loads phpMemcachedAdmin into WordPress. For anything about phpMemcachedAdmin itself, goto https://code.google.com/p/phpmemcacheadmin/
1. Tested in WordPress version 3.9.2 and 4.0