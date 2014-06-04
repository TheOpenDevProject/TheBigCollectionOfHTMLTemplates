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
$databaseIO->Add_Customer($_POST['customer-first-name'],$_POST['customer-last-name'],$_POST['customer-email']);
echo 'Customer Added!';
}

if($exec_type == 1){

}
?>