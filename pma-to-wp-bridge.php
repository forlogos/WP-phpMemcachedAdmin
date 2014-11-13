<?php /*phpMemcachedAdmin breaks when WP is loaded before it. 
So, use a separate way to find out if the current_user_can manage_options. 
If the current user can, show phpMemcachedAdmin, if not redirect nowhere (silence is golden!!!)
use a simple GET request to verify. If this file gets the GET request, then this is being viewed with a user with the correct permissions...
*/

//cleanup passed vars. All these vars are passed thru the holding iframe in WP admin
$crrnt_sr_cn=(!empty($_GET['crrnt_sr_cn'])?$_GET['crrnt_sr_cn']:'no');

if($crrnt_sr_cn!='yes_oo_hai') {//user can't manage_options. redirect!!
	header( "Refresh:1; url=/", true, 303);//redirect to root. But delay it. Need js to pass vars through the iframe before this happens
}