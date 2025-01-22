<?php
defined('__ROOT_URL__') OR exit('No direct script access allowed');

class Pages extends Controller {

    protected static $sspModel;
	
    public function __construct() {		
       self::$sspModel = $this->model('SspModel');		
    }
	
    public function index() {		
	header('location:' . __ROOT_URL__ . '/error404' );         
    }
	
    public function About(){		
	$data = [
           'title' => 'About page',
	   'page' => 'about'
        ];
	$this->view('pages/about', $data);        
    }
	
    public function Datatables(){		
	$data = [
	    'title' => 'Datatable page',
	    'page' => 'datatable'
        ];
	$this->view('pages/datatable', $data);        
    }
	
    public function SspDataTable(){
	if (isset($_POST['draw'])){			
	    exit ( self::$sspModel->sspDataTable($_POST) );
	} else {				
	    header('location:' . __ROOT_URL__ .'/error404' );
	    exit();		
	}
    }
}
