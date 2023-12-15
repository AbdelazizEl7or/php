<?php

class DbManager {

	//Database configuration
	private $dbhost = 'localhost';
	private $dbport = '27017';
	private $conn;
	
	function __construct(){
        //Connecting to MongoDB
        try {
			//Establish database connection
            $this->conn = new MongoDB\Driver\Manager('mongodb+srv://zizoBoy:741852@islam-data.iovdiwe.mongodb.net/all-data?retryWrites=true&w=majority');
        }catch (MongoDBDriverExceptionException $e) {
            echo $e->getMessage();
			echo nl2br("n");
        }
    }

	function getConnection() {
		return $this->conn;
	}

}

?>
