<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_get extends CI_Controller {
        // 构造方法
        function __construct() 
        {
                parent::__construct();
                // 加载计算模型

        }
        
        // 默认方法
        function index() 
        {
                echo "messageget";
        }  
}

