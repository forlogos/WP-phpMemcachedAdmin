<?php /*phpMemcachedAdmin breaks when WP is loaded before it. 
So, use a separate way to find out if the current_user_can manage_options. 
If the current user can, show phpMemcachedAdmin, if not redirect nowhere (silence is golden!!!)
*/

//cleanup passed vars. All these vars are passed thru the holding iframe in WP admin
$url=(!empty($_GET['url'])?$_GET['url']:'');
$ABSPATH=(!empty($_GET['ABSPATH'])?$_GET['ABSPATH']:'');
$uid=(!empty($_GET['uid'])?$_GET['uid']:'');

//form the url from vars
$geturl=$url.'?ABSPATH='.$ABSPATH.'&uid='.$uid;

//now, query the URL. WP not loaded so can't use wp_remote_get
if(function_exists('curl_init')) {//can we use curl?
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $geturl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $current_user_can = curl_exec($ch);
    curl_close($ch);
}elseif(function_exists('fopen') && function_exists('stream_get_contents')) {//another fallback
	$handle = fopen ($geturl, "r");
	$current_user_can = stream_get_contents($handle);
}elseif(function_exists('file_get_contents')) {//can we use file_get_contents?
    $current_user_can = file_get_contents($geturl);
}else{//fail it. Should I program another fallback?
	$current_user_can='no';
}

//if vars are empty - even 1, means phpMemcachedAdmin is being viewed directly without this WP plugin. kill it.
if($url=='' || $ABSPATH=='' || $uid=='' ) {
	$current_user_can='no';//this effectively kills it!
}

if($current_user_can=='no') {//user can't manage_options. redirect!!
	header( "Refresh:1; url=/", true, 303);//redirect to root. But delay it. Need js to pass vars through the iframe before this happens
}

echo '&nbsp;';//for some reason it works better if I actually output something