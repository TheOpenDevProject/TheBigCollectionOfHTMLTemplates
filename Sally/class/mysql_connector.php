<?php
//Just a little mySQLI class for later
class mysqlConnect{

	public function __construct(){
		$mysqlDB = new mysqli("localhost","dillonisgay","dillon","sally_clothes");
	//Do a little error handling for good measure
	if ($mysqlDB->connect_errno) 
	{
	echo "Failed to connect to MySQL: (" . $mysqlDB->connect_errno . ") " . $mysqlDB->connect_error;
		}
	}
	
	
	
};

?>