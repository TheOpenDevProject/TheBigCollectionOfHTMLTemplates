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
	
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function Add_Purchase($cid,$product_id){
	//Prepare the statement and check if its all good or else MISSION ABORT!
	if(!$p_stmt = $this->mysql->prepare("SELECT product_Price FROM products WHERE product_ID = ?")){
			die("Oh boy oh boy oooooohhhhh boy, Uhm so yeh its like ye not working...");
	}
	//Bind the stuff to the prepared statement mysqli stage 2
	if(!$p_stmt->bind_param("i",$product_id)){
	die("Failed to glue the customer into the Database...");
	}
	//AIM AND FIRE!
	if(!$p_stmt->execute()){
	die("Super orbit Ion lasser not stronk enough to kill...");
		}
		
	if(!$p_stmt->bind_result($product_price)){
	echo "No results were bound";
		}else{
		$productPrice = $product_price;
		}
		
		
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	/*public function Add_Product($product_type,$product_name,$product_price,$product_desc){
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
	}*/
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

	public function get_Customer_List($i){
	if(!$p_stmt = $this->mysql->prepare("SELECT customer_ID,customer_first_name,customer_last_name,customer_email,customer_balance FROM customers WHERE customer_ID = ?")){
		echo "Error in preparing MYSQL statement"; //Something went wrong and we want to know...
		}
		
	if(!$p_stmt->bind_param("i",$i)){
		echo "Error in binding a LOOKUP key";
		}
		
	if(!$p_stmt->execute()){
	die("Fatal error: Could not execute mysql query");
	}
	
	if(!$p_stmt->bind_result($customer_ID,$customer_first,$customer_last,$customer_email,$customer_balance)){
	echo "No results were bound";
	}
	
	while($p_stmt->fetch()){
		return $itemArray = array(
		"customer_ID" => $customer_ID,
		"customer_first" => $customer_first,
		"customer_last" => $customer_last,
		"customer_email" => $customer_email,
		"customer_balance" => $customer_balance,
		);
		}
		$p_stmt->close();
	}
	////////////////////////////////////////////////////////////////////////////////////
		public function get_Items_Stockage($i){
	if(!$p_stmt = $this->mysql->prepare("SELECT product_ID,product_Type,product_Name,product_Desc,product_Price,product_ninstock FROM products WHERE product_ID = ?")){
		echo "Error in preparing MYSQL statement"; //Something went wrong and we want to know...
		}
		
	if(!$p_stmt->bind_param("i",$i)){
		echo "Error in binding a LOOKUP key";
		}
		
	if(!$p_stmt->execute()){
	die("Fatal error: Could not execute mysql query");
	}
	
	if(!$p_stmt->bind_result($product_ID,$product_Type,$product_Name,$product_Desc,$product_Price,$nstock)){
	echo "No results were bound";
	}
	
	while($p_stmt->fetch()){
		return $itemArray = array(
		"product_ID" => $product_ID,
		"product_Type" => $product_Type,
		"product_Name" => $product_Name,
		"product_Desc" => $product_Desc,
		"product_Price" => $product_Price,
		"stockLeft" => $nstock
			);
		}
		$p_stmt->close();
	
	}
	////////////////////////////////////////////////////////////////////////////
	public function GetNProducts(){
	    $sql = "SELECT sTypeID FROM stock_types";
        $result = $this->mysql->query($sql);
		return $result->num_rows;
	}
	public function GetNCustomers(){
	$sql = "SELECT customer_ID FROM customers";
	$result = $this->mysql->query($sql);
	return $result->num_rows;
	}
	public function GetNStock(){
	$sql = "SELECT product_ID FROM products";
	$result = $this->mysql->query($sql);
	return $result->num_rows;
	}
	///////////////////////////////////////////////////////////////////////////
	public function generateInlineReport(){
	//
	//Do Some Prep Work :This is not a fast function:
	//
	$nOfStockCats = $this->GetNProducts();
	$nOfProducts = $this->GetNStock();
	$nOfCustomers = $this->GetNCustomers();
	//3 DB Calls made... Holly crap that is a lot of over head for mySQL
	$returnTable = '<table>';
	$returnTable .='<th>Types of items in stock</th>';
	
	for($i = 1; $i <= $nOfStockCats;$i++){
	$returnTable .= '<tr>' .'<td>Category ID: ' . $i . '</td>' . '<td>' . $this->get_Product_cats($i) . '</td></tr>';
	}
	$returnTable .='<th>Items & Stocks</th>';
	for($i = 1; $i <= $nOfProducts; $i++){
	$context = $this->get_Items_Stockage($i);
	$returnTable .= '<tr>' . '<td>Product ID: ' . $context['product_ID'].'</td>' . '<td>' . $context['product_Name'] . '</td><td>Price($'. $context['product_Price'] . ')</td><td>Stock: '.$context['stockLeft'] .'</td>'. '<td>Product Type:' .$context['product_Type'] . '</td>' . '<td>Product Desc: ' .$context['product_Desc'] . '</td>' .'</tr>';
	}
	$returnTable .='<th>Customer Report</th>';
	for ($i = 1; $i <= $nOfCustomers; $i++){
	$context = $this->get_Customer_List($i);
	$returnTable .= '<tr>' . '<td>Customer Name: ' . $context['customer_first'] . " " . $context['customer_last'] . '</td>' . '<td>Customer Email: ' .$context['customer_email'] . '</td>' . '<td>Balance Owed: $'. $context['customer_balance']. '</td></tr>';
	}
	$returnTable .= '</table>';
	return $returnTable;
	}
	
	};
?>