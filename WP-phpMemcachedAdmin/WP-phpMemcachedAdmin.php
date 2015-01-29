<?php /*
Plugin Name: WP phpMemcachedAdmin
Plugin URI: 
Description: Use the excellent web-based stats viewer for memcache, phpMemcachedAdmin, within your WordPress admin.
Version: 1.0
Author: forlogos
Author URI: https://jasonjalbuena.com
License: GPLv3
*/
class WP_phpMemcachedAdmin {
	private static $instance = null;
	private $plugin_path;
	private $plugin_url;
	public static function get_instance() {
		// If an instance hasn't been created and set to $instance create an instance and set it to $instance.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
	private function __construct() {
		add_action('admin_menu',array( $this,'add_admin_menu'));
		add_action( 'admin_enqueue_scripts', array( $this, 'register_scripts' ) );
		$this->run_plugin();
	}
	//add plugin to the tools menu
	public function add_admin_menu() {
		add_management_page('WP-phpMemcachedAdmin', 'phpMemcached', 'manage_options', 'WP_phpMemcachedAdmin', 'wp_phpmcdadmin');
	}
    //Enqueue jquery - although I didn't end up using it much....
    public function register_scripts() {
		wp_enqueue_script('jquery');
	}
    private function run_plugin() {
		function wp_phpmcdadmin() {
			echo '<iframe id="phpmcdadmin" src="'.plugin_dir_url( __FILE__ ).'phpMemcachedAdmin?crrnt_sr_cn=yes_oo_hai" style="width:100%; overflow: auto;" frameborder="0" onload="sizeFrame();scrollToTop();">You need to use a browser that supports iframes.</iframe>
			<script type="text/javascript">
				jQuery(document).ready(function($){
					$("iframe").load( function() {
						$("iframe").contents().find("body").css("background","#F1F1F1");						
					});
				});
				//resize iframe height dynamically
				function sizeFrame() {
					var F = document.getElementById("phpmcdadmin");
					if(F.contentDocument) {
						F.height = F.contentDocument.documentElement.scrollHeight + 60; //FF 3.0.11, Opera 9.63, and Chrome
					} else {
						F.height = F.contentWindow.document.body.scrollHeight + 60; //IE6, IE7 and Chrome
					}
					//always pass the crrnt_sr_cn GET var, needed to verify if user can view this, no crrnt_sr_cn no viewing
					if ( F.contentWindow.location.href.indexOf("crrnt_sr_cn=yes_oo_hai") < 0  ) {
						if ( F.contentWindow.location.href.indexOf("?") < 0  ) {
							F.contentWindow.location.href = F.contentWindow.location.href + "?crrnt_sr_cn=yes_oo_hai";
						} else {
							F.contentWindow.location.href = F.contentWindow.location.href + "&crrnt_sr_cn=yes_oo_hai";
						}
					}
				}
				function scrollToTop() {
					scroll(0,0);
				}
			</script>';
		}
	}
}
WP_phpMemcachedAdmin::get_instance();