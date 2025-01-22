<?php
defined('__ROOT_URL__') OR exit('No direct script access allowed');

Class Bootstrap {
	
	protected static $error404 = false;
	protected static $controllerName;
	
	public function __construct(){
		
		if (isset($_GET['path'])) {
		
			$tokens = explode ('/', trim($_GET['path'], '/'));
			
			self::$controllerName = ucfirst(array_shift($tokens));
			
			if (file_exists(__ROOT_APP__ . '/controllers/'. self::$controllerName .'.php')) {
				
				$controller = new self::$controllerName();
				
				if (!empty($tokens)) {
					
					$actionName = array_shift($tokens);				
					if (method_exists($controller, $actionName)){	
						$controller->{$actionName}(@$tokens);		
					} else {
						self::$error404 = true;
					}
				} else {
					$controller = new $controller;
					$controller->index();
				}				
			} else {				
				self::$error404 = true;
			}
			
		} else {
			$controllerName = 'Home';
			$controller = new $controllerName();
			$controller->index();
		}
		
		if (self::$error404){
			header('location:' . __ROOT_URL__ . '/error404' );  
		}
	}	
}
