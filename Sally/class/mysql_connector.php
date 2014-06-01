<?php
//Just a little mySQLI class for later

class mysqlConnect{

	public function __constructor(){
		$mysqlDB = new mysqli("localhost","root","toor","sally_shop");
	//Do a little error handling for good measure
		if($mysqliDB->connect_errno){
		echo "I simply refuse to connect to the MYSQL Database because i hate you" . "No but here is the error $mysqliDB->connect_error";
		}
	}
};

?>