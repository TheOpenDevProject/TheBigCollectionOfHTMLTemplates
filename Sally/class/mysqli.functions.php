<?php
include('mysql_connector.php');
class Transaction extends mysqlConnect{

	public function Add_Customer($cfn,$cln,$cmail){
	//Prepare the statement and check if its all good or else MISSION ABORT!
	if(!$p_stmt = $this->mysqlDB->prepare("INSERT INTO customers(customer_first_name,customer_last_name,customer_email) VALUES (?,?,?)")){
			die("Oh boy oh boy oooooohhhhh boy, Uhm so yeh its like ye not working...");
	}
	//Bind the stuff to the prepared statement mysqli stage 2
	if(!$p_stmt->bind_param("sss",$cfn,$cln,$cmail)){
	die("Failed to glue the customer into the Database...");
	}
	//AIM AND FIRE!
	if(!$p_stmt->execute()){
	die("Super orbit Ion lasser not stronk enough to kill...");
	}
}
	};
?>