<?php
defined('__ROOT_URL__') OR exit('No direct script access allowed');

class Home extends Controller {
	
	public function index() {		
		$data = [
			'title' => 'Home page',
			'page' => 'home'
        ];		
		$this->view('index', $data);        
    }	
}