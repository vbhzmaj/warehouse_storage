<?php

if(isset($_GET['item_id']) && isset($_GET['decrement']) && isset($_GET['quantity'])){
		$item_id = $_GET['item_id'];
		$decrement = $_GET['decrement'];
		$quantity = $_GET['quantity'];
		if(preg_match('/^\d+$/',$decrement) && $decrement <= $quantity) {
			$newQuantity = $quantity - $decrement;
			require 'connection.php';
			$query = "UPDATE items SET quantity = {$newQuantity} WHERE item_id = {$item_id}";
			mysqli_query($conn, $query);
			header("Location: ../minus.php");
			} else {
			header("Location: ../minus.php");
		}
	}
		
?>	