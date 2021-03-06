<?php

class Function_ extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}


	//获取服务端时间戳
	function get_timestamp() 
	{
		date_default_timezone_set("prc");  
		
		return time(); 
	}


	//获取6位随机字符
	function get_str($length)
	{
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";  
		$password = "";  
		for ( $i = 0; $i < $length; $i++ )  
		{  
			@$password .= $chars[ mt_rand(0, strlen($chars) - 1) ];  
		}  
		return $password;  

	}


	//通过x字符串获得用户ID
	function get_self_id($session_str)
	{
		$user_id = substr($session_str,0,strlen($session_str)-32);

		return $user_id;
	}
}
?>