<?php
require 'connection.php';
if(isset($_GET['criteria'])){
	if(!empty($_GET['criteria'])){
		$criteria = trim ($_GET['criteria']);
	    $criteria = mysqli_real_escape_string($conn, $criteria);
		$query = "SELECT * FROM items WHERE item LIKE '%{$criteria}%' OR category LIKE '%{$criteria}%'";
		$result = mysqli_query ($conn, $query);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
				<div id = "result">
				<img src = "images/item.png">
				<p><b>Item: </b><?php echo $row['item']; ?></p>
				<p><b>Category: </b><?php echo $row['category']; ?></p>
				<p><b>Price: </b><?php echo $row['price']; ?></p>
				<p><b>Quantity: </b><?php echo $row['quantity']; ?></p>
				<p><b>Storage unit: </b><?php echo $row['storage_unit']; ?></p>
				</div>
				<?php
			}
			echo "Number of items found is " . mysqli_num_rows($result);
		}else {
			echo "No results for given search criteria.";
		}
	}else {
		echo "Search field cannot be empty.";
	}
}

?>