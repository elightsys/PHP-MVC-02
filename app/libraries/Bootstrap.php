<?php
defined('__ROOT_URL__') OR exit('No direct script access allowed');

Class Bootstrap {
	
	protected $error404 = false;
	
	public function __construct(){
		
		if (isset($_GET['path'])) {
		
			$tokens = explode ('/', trim($_GET['path'], '/'));
			
			$this->controllerName = ucfirst(array_shift($tokens));
			
			if (file_exists(__ROOT_APP__ . '/controllers/'. $this->controllerName .'.php')) {
				
				$controller = new $this->controllerName();
				
				if (!empty($tokens)) {
					
					$actionName = array_shift($tokens);				
					if (method_exists($controller, $actionName)){	
						$controller->{$actionName}(@$tokens);		
					} else {
						$this->error404 = true;						
					}
				} else {
					$controller = new $controller;
					$controller->index();
				}				
			} else {				
				$this->error404 = true;				
			}
			
		} else {
			$controllerName = 'Home';
			$controller = new $controllerName();
			$controller->index();
		}
		
		if ($this->error404){
			header('location:' . __ROOT_URL__ . '/error404' );  
		}
	}	
}