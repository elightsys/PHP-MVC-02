<?php
defined('__ROOT_URL__') OR exit('No direct script access allowed');
class Database {		
    private $dbHost = __DB_HOST__;
    private $dbUser = __DB_USER__;
    private $dbPass = __DB_PASS__;
    private $dbName = __DB_NAME__;
    private $statement;
    private $dbHandler;    private $error;
    public function __construct() {        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".__DB_CHARSET__
        );
        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);			
        } catch (PDOException $e) {
			$this->error = $e->getMessage();
			echo '<script>console.log("'.$this->error.'"); </script>'; 
			die ('Database Error. Please visit later.'); 		}
    }
    //Allows us to write queries
    public function query($sql) {
        $this->statement = $this->dbHandler->prepare($sql);
    }
    //Bind values
    public function bind($parameter, $value, $type = null) {            
		switch (is_null($type)) {			
            case is_int($value):
				$type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;			case is_null($value):                $type = PDO::PARAM_NULL;                break;            default:                $type = PDO::PARAM_STR;        }
        $this->statement->bindValue($parameter, $value, $type);
    }	//Execute the prepared statement
    public function execute() {				try {
			return $this->statement->execute();
		} catch (PDOException $e) {
			if ($e->errorInfo[1] == 1062) { // duplicate unique!!!
				exit($e); //return $e; //false;
			} else {
				exit($e); //return $e; //false;
			// an error other than duplicate entry occurred
			}
		}
    }	
		
	public function lastId() {			
		return $this->dbHandler->lastInsertId();
	}
    //Return an array
    public function resultSet() {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC); 
    }
	public function resultFetch() {        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }
	public function last_id(){		return $this->conn->lastInsertId();
	}
    //Return a specific row as an object
    public function single() {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    //Get's the row count
    public function rowCount() {		
        return $this->statement->rowCount();    }
}