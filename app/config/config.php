<?php
$root = (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$script_name = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

define ('__ROOT_URL__', substr(str_replace('/public','',$root.$script_name),0,-1)); // URL
//define ('__ROOT_PATH__', realpath($_SERVER['DOCUMENT_ROOT'].'/'.$script_name));//PUBLIC
define('__ROOT_APP__', dirname(dirname(__FILE__))); // APP

// PAGE NAME
define ('__SITE_NAME__', 'My MVC 02');

//Database params
define('__DB_HOST__', ''); //Add your db host
define('__DB_USER__', ''); // Add your DB root
define('__DB_PASS__', ''); //Add your DB pass
define('__DB_NAME__', ''); //Add your DB Name
define('__DB_CHARSET__', 'utf8mb4');