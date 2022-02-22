<?php

if(isset($_GET['insert'])){
	if(isset($_GET['item']) && isset($_GET['category']) && isset($_GET['price']) && isset($_GET['quantity']) && isset($_GET['storage_unit'])){
		if(!empty($_GET['item']) && !empty($_GET['category']) && !empty($_GET['price']) && !empty($_GET['quantity']) && !empty($_GET['storage_unit'])){
			$item = trim ($_GET['item']);
			$category = trim ($_GET['category']);
			$price = trim ($_GET['price']);
			$quantity = trim ($_GET['quantity']);
			$storage_unit = trim ($_GET['storage_unit']);
			require 'connection.php';
			$item = mysqli_real_escape_string ($conn, $item);	
			$category = mysqli_real_escape_string ($conn, $category);
			$price = mysqli_real_escape_string ($conn, $price);
			$quantity = mysqli_real_escape_string ($conn, $quantity);
			$storage_unit = mysqli_real_escape_string ($conn, $storage_unit);
			$query = "INSERT INTO items (item, category, price, quantity, storage_unit) VALUES ('{$item}', '{$category}', '{$price}', '{$quantity}', '{$storage_unit}')";
			if(mysqli_query ($conn, $query) === TRUE){
				echo "New item successfully added to database.";
			}else {
				echo "Error";
				}
			}else {
			echo "All fields must be filled in!";
			}
		}else{
			echo "All parameters should be sent!";
			}
	
}
?>	
	
	