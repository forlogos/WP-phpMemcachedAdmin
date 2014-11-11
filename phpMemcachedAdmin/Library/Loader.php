<?php /*
//
//as per apache license 2.0 http://www.apache.org/licenses/LICENSE-2.0
//this file was modified from the original version.
//
//The one line of added code directly proceeds this comment. File being required bridges phpMemcachedAdmin to WP and will either allow it to be viewed or not.
//
*/
require_once('../pma-to-wp-bridge.php');

# Constants declaration
define('CURRENT_VERSION', '1.2.2');

# PHP < 5.3 Compatibility
if(!defined('ENT_IGNORE'))
{
    define('ENT_IGNORE', 0);
}

# Autoloader
function __autoload($class)
{
    require_once str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
}