<!DOCTYPE html>
<!--	Author: Damron
		Date:	10/18/20
		File:	software-order.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Software Order</h1>
<?php

	// your code here
    include ("inc-order-object.php");
  
    $cost = $_POST['cost'];
	$items = $_POST['items'];
  
    $order = new Order();
  
    $order->setItemCost($cost);
    $order->setNumItems($items);
  
	
	// you can change the variables in the table if you need to use different names
	print("	<table>
			<tr><td>Sub-Total:</td><td>".$order->getSubTotal()."</td></tr>
			<tr><td>Tax:</td><td>".$order->getSalesTax()."</td></tr>
			<tr><td>Shipping and Handling:</td><td>".$order->getShippingHandling()."</td></tr>
			<tr><td>TOTAL:</td><td>".$order->getTotal()."</td></tr>
			</table>");
?>
</body>
</html>