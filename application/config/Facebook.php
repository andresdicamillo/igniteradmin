<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['appId']  = '555302641166973'; 
$config['secret'] = '598e02e22eafa04e1f0c51c413a32d21';
$config['fb_channel_url'] = "wwww.adyouwish.com/channel.php";
$config['fb_redirect_uri'] = "https://apps.facebook.com/kia_pizza_cero";

//https://developers.facebook.com/docs/reference/php/facebook-getLoginUrl/
$config['facebook_login_parameters'] = array(
											'scope' => 'email,user_birthday',
											'display' => 'page'
											);