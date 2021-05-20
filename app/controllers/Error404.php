<?php 
defined('__ROOT_URL__') OR exit('No direct script access allowed');

class Error404 extends Controller {
	
	public function index() {
		$data = [
            'title' => '!404 page',
			'page' => 'erro404'
		];
		$this->view('error/index', $data);		
	}
}
