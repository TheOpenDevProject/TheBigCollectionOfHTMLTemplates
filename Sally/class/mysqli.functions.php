<?php
require_once 'mysql_connector.php';

class Transaction extends sqlConnection{
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function Add_Customer($cfn,$cln,$cmail){
	//Prepare the statement and check if its all good or else MISSION ABORT!
	if(!$p_stmt = $this->mysql->prepare("INSERT INTO customers(customer_first_name,customer_last_name,customer_email) VALUES (?,?,?)")){
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
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function Add_Product($product_type,$product_name,$product_price,$product_desc){
		//Prepare the statement and check if its all good or else MISSION ABORT!
	if(!$p_stmt = $this->mysql->prepare("INSERT INTO products(product_Type,product_Name,product_Desc,product_Price) VALUES (?,?,?,?)")){
			die("Oh boy oh boy oooooohhhhh boy, Uhm so yeh its like ye not working...");
	}
	//Bind the stuff to the prepared statement mysqli stage 2
	if(!$p_stmt->bind_param("issd",$product_type,$product_name,$product_desc,$product_price)){
	die("Failed to glue the customer into the Database...");
	}
	//AIM AND FIRE!
	if(!$p_stmt->execute()){
	die("Super orbit Ion lasser not stronk enough to kill...");
		}
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	public function get_Product_cats($i){
	if(!$p_stmt = $this->mysql->prepare("SELECT sTypeName FROM stock_types WHERE sTypeID = ?")){
		echo "Error in preparing MYSQL statement"; //Something went wrong and we want to know...
		}
		
	if(!$p_stmt->bind_param("i",$i)){
		echo "Error in binding a LOOKUP key";
		}
		
	if(!$p_stmt->execute()){
	die("Fatal error: Could not execute mysql query");
	}
	
	if(!$p_stmt->bind_result($typeName)){
	echo "No results were bound";
	}
	
	while($p_stmt->fetch()){
		return $typeName;
		}
		$p_stmt->close();
	
	}
	////////////////////////////////////////////////////////////////////////////
	public function GetNProducts(){
	    $sql = "SELECT sTypeID FROM stock_types";
        $result = $this->mysql->query($sql);
		return $result->num_rows;
	}
	///////////////////////////////////////////////////////////////////////////
	
	
	};
?>