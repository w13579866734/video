<?php

class Function_ extends CI_Model {
        
        function __construct() {
                parent::__construct();
        }

        function get_timestamp() 
        {
			date_default_timezone_set("prc");  
			  
			return time(); 
        }

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
}
?>