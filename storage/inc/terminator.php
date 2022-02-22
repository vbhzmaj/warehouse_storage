<?php
require 'connection.php';
if(isset($_GET['item_id'])){
	$item_id = $_GET['item_id'];
	$query = "DELETE from items WHERE item_id = {$item_id}";
	mysqli_query($conn, $query);
	header("Location: ../remove.php");
	}
?>	