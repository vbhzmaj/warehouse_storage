<html>
<head>
	<title>Storage</title>
	<link rel = "stylesheet" type = "text/css" href = "css/style.css">
</head>
<body>
	<div id = "wrap">
		<div id = "search">
			<img src = "images/minus.png"></br></br>
			<a href = "index.php"><img src = "images/search.png" height = "50px" title = "Search for an item in DB."></a>
			<a href = "add.php"><img src = "images/add.png" height = "50px" title = "Add an item to DB."></a>
			<a href = "remove.php"><img src = "images/remove.png" height = "50px" title = "Remove an item from DB."></a>
			<a href = "plus.php"><img src = "images/plus.png" height = "50px" title = "Increase the quantity of an item."></a></br>
		</div>
		<div id = "search_display">
		<p>Decrease will be performed only by valid entry: positive integers only with no empty spaces.</p>
		<?php
			require 'inc/connection.php';
			$query = "SELECT * FROM items";
			$result = mysqli_query ($conn, $query);
			if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)){
				?>
					<div id = "result">
						<img src= "images/item.png" >
						<p><b>Item: </b><?php echo $row['item']; ?></p>
						<p><b>Category: </b><?php echo $row['category']; ?></p>
						<p><b>Price: </b><?php echo $row['price']; ?></p>
						<p><b>Quantity: </b><?php echo $row['quantity']; ?></p>
						<p><b>Storage unit: </b><?php echo $row['storage_unit']; ?></p>
						<form action = "inc/decrease.php" method = "GET">
							<label><b>Decrease quantity for: </b>
							<input type = "text" name = "decrement" size = "6" maxlength = "6" placeholder = "Integer..."></label>
							<input type="hidden" name="item_id" value="<?php echo $row['item_id'];?>"> 
							<input type="hidden" name="quantity" value="<?php echo $row['quantity'];?>"> 
							<input type = "submit" name = "decrease" value = "Decrease" >
						</form>
					</div>
				<?php
				}
			}else
					{
						echo "No items in storage.";
					}
				?>
		</div>
	</div>
</body>
</html>