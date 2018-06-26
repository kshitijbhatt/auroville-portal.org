<?php
class Connection {
	private $connection;
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbName = "auro_portal";

	public function __construct(){
		$this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbName);
		if ($this->connection->connect_error) {
		    die("Connection failed: " . $this->connection->connect_error);
		}
		
	}
	 public function query($sql) {
    	return $this->connection->query($sql);
  	}

}
?>