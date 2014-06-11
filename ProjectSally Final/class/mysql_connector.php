<?php
//Just a little mySQLI class for later
class sqlConnection{
	public $mysql;
	public function __construct(){
		$this->mysql = new mysqli("localhost","dillonisgay","dillon","sally_clothes");
	//Do a little error handling for good measure
	if ($this->mysql->connect_errno) 
	{
	echo "Failed to connect to MySQL: (" . $this->mysql->connect_errno . ") " . $this->mysql->connect_error;
		}
	}
	
	
	
};

?>