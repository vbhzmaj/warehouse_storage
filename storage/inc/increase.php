<?php

if(isset($_GET['item_id']) && isset($_GET['increment']) && isset($_GET['quantity'])){
		$item_id = $_GET['item_id'];
		$increment = $_GET['increment'];
		$quantity = $_GET['quantity'];
		if(preg_match('/^\d+$/',$increment)) {
			$newQuantity = $quantity + $increment;
			require 'connection.php';
			$query = "UPDATE items SET quantity = {$newQuantity} WHERE item_id = {$item_id}";
			mysqli_query($conn, $query);
			header("Location: ../plus.php");
			} else {
			header("Location: ../plus.php");
		}
	}
	
?>	