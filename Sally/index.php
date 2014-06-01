<!DOCTYPE HTML>
<head>
<title>Sally's Clothes Shop</title>
<link href="/style/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="clean-header">Sally's Clothes</div>
	<div id="center-fix">
	<div id="menu-sys"><!--Use this and bind to a target selector, This will allow me to create a bug!-->
	<a href="#add-customer-form"><div class="pos-system-select" id="pos-green"><div class="txt-f-r">Add Customer</div></div></a>
	<a href="#create-purchase-form"><div class="pos-system-select" id="pos-red"><div class="txt-f-r">Create Purchases</div></div></a>
	<a href="#product-manager-form"><div class="pos-system-select" id="pos-blue"><div class="txt-f-r">Product Manager</div></div></a>
	<a href="#records-form"><div class="pos-system-select" id="pos-yellow"><div class="txt-f-r">Records</div></div></a>
	</div>
	<!--Add customer form-->
	<div id="add-customer-form">
	<a style="margin-left:83%;"href="#menu-sys">Back To Main Menu</a>
	<h1 style="margin:0;color:#fff;font-family:sans-serif;background-color:#5CC4FF;text-align:center;">Add A Customer</h1>
	<form id="addcst" action="php_class/addcustomer.php" method="post">
	<table>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
		<tr>
	<td>Add Record</td>
	<td><input id="cust-name-submit" value="submit" type="Submit" /></td>
	</tr>
	</table>
	
	</form>
	</div>
	<!--End Of Form-->
	
		<!--Add customer form-->
	<div id="create-purchase-form">
	<a style="margin-left:83%;"href="#menu-sys">Back To Main Menu</a>
	<h1 style="margin:0;color:#fff;font-family:sans-serif;background-color:#5CC4FF;text-align:center;">Create A Purchase</h1>
	<form id="addcst" action="php_class/addcustomer.php" method="post">
	<table>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
		<tr>
	<td>Add Record</td>
	<td><input id="cust-name-submit" value="submit" type="Submit" /></td>
	</tr>
	</table>
	
	</form>
	</div>
	<!--End Of Form-->
	
		<!--Add customer form-->
	<div id="product-manager-form">
	<a style="margin-left:83%;"href="#menu-sys">Back To Main Menu</a>
	<h1 style="margin:0;color:#fff;font-family:sans-serif;background-color:#5CC4FF;text-align:center;">Add A Product</h1>
	<form id="addcst" action="php_class/addcustomer.php" method="post">
	<table>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
		<tr>
	<td>Add Record</td>
	<td><input id="cust-name-submit" value="submit" type="Submit" /></td>
	</tr>
	</table>
	
	</form>
	</div>
	<!--End Of Form-->
	
		<!--Add customer form-->
	<div id="records-form">
	<a style="margin-left:83%;"href="#menu-sys">Back To Main Menu</a>
	<h1 style="margin:0;color:#fff;font-family:sans-serif;background-color:#5CC4FF;text-align:center;">Add A Customer</h1>
	<form id="addcst" action="php_class/addcustomer.php" method="post">
	<table>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
	
	<tr>
	<td>Customer Name</td>
	<td><input id="cust-name-input" name="customer-name" type="text"/></td>
	</tr>
		<tr>
	<td>Add Record</td>
	<td><input id="cust-name-submit" value="submit" type="Submit" /></td>
	</tr>
	</table>
	
	</form>
	</div>
	<!--End Of Form-->
	</div>
	
</body>

<!--So basically i just am using css to create the effect that we have different pages-->