<?php
include ('mysqli.functions.php');
$databaseIO = new Transaction();
//Just doing some basic work to check for transaction case
$exec_type = $_GET['type'];
//If no type is set
if(!isset($exec_type)){
die("Type must be specified");
}

if($exec_type == 0){
print_r($_POST);
$databaseIO->Add_Customer($_GET['customer-first-name'],$_GET['customer-last-name'],$_GET['customer-email']);
}
?>