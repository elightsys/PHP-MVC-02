<?php

defined('__ROOT_URL__') OR exit('No direct script access allowed');

class SspModel {
    
    private $table = 'datatables_demo';
    private $primaryKey = 'id';	
    private $sql_set = array(
	'user' => __DB_USER__, //$db_username,
	'pass' => __DB_PASS__, //$db_password,
	'db'   => __DB_NAME__, //$db_name,
	'host' => __DB_HOST__ //$db_host
    );
	
    public function __construct() {		
	new Ssp;		
    }

    public function sspDataTable($post){
	$columns = array(			
    	    array( 'db' => 'a.first_name', 'dt' => 0, 'field' => 'first_name' ),
	    array( 'db' => 'a.last_name', 'dt' => 1, 'field' => 'last_name' ),
	    array( 'db' => 'a.position', 'dt' => 2, 'field' => 'position' ),
    	    array( 'db' => 'a.email', 'dt' => 3, 'field' => 'email' ),
	    array( 'db' => 'a.office', 'dt' => 4, 'field' => 'office' ),
	    array( 'db' => 'a.start_date', 'dt' => 5, 'field' => 'start_date' ),
	    array( 'db' => 'a.age', 'dt' => 6, 'field' => 'age' ),
	    array( 'db' => 'a.salary', 'dt' => 7, 'field' => 'salary' ),
	    array( 'db' => 'a.seq', 'dt' => 8, 'field' => 'seq' ),
	    array( 'db' => 'a.extn', 'dt' => 9, 'field' => 'extn' )
	);

	$joinQuery = "FROM ".$this->table." AS a";

	$extraWhere = null;//"`u`.`salary` >= 90000";
	$groupBy = null; //"`u`.`office`";
	$having = null;//"`u`.`salary` >= 140000";		

	return json_encode(
	    SSP::simple( $post, $this->sql_set, $this->table, $this->primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having )
	);		
    }
}
