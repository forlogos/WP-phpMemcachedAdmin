<?php //get WP stuff in here. find out if the current user can manage_options
define('WP_USE_THEMES', false);
require($_GET['ABSPATH'].'wp-blog-header.php');

//set the uid var, which is the current user's ID
$uid=(!empty($_GET['uid'])?$_GET['uid']:'');

//so, can the user manage_options?
if(user_can($uid,'manage_options')) {
	echo 'yes';
}else{
	echo 'no';
}