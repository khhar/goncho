<?php
    session_start();
    $url = $_SERVER['REQUEST_URI'];
    $url = substr($url, 1);
    $url_arr = explode('/', $url);
    spl_autoload_register(
    	function ($class){
            $name = lcfirst($class);
            $name = str_replace('_','/',$name);
            include $name.'.php';
    	}
    );
    $obj = new System_routes($url_arr);
    
    //
   