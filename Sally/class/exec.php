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
echo 'Customer Added!</b>Now Redirecting....';
}
if(!exec_type == 1){

}
if($exec_type == 2){
$databaseIO->Add_Product($_POST['product_c_s'],$_POST['product_name'],$_POST['product_price'],$_POST['product_desc']);
echo 'Product Added</b>Now Redirecting....';
}
?>
<script type="text/javascript">
    <!--
    window.location = "localhost:3317/#menu-sys"
    //-->
    </script>