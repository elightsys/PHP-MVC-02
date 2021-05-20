<?php
require_once ('config/config.php');

spl_autoload_register(
	function ($className){
		
		if (file_exists('../app/controllers/' . $className . '.php')){
			require_once ('../app/controllers/' . $className . '.php');			
		} else if (file_exists('../app/models/' . $className . '.php')){
			require_once ('../app/models/' . $className . '.php');	
		} else if (file_exists('../app/libraries/' . $className . '.php')){
			require_once ('../app/libraries/' . $className . '.php');			
		}
});

new Bootstrap();