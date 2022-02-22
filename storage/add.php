<html>

<head>
	<title>Storage</title>
	<link rel = "stylesheet" type = "text/css" href = "css/style.css">
</head>

<body>
	<div id = "wrap">
		<div id = "search">
			<img src = "images/add.png"></br></br>
			<a href = "index.php"><img src = "images/search.png" height = "50px" title = "Search for an item in DB."></a>
			<a href = "remove.php"><img src = "images/remove.png" height = "50px" title = "Remove an item from DB."></a>
			<a href = "plus.php"><img src = "images/plus.png" height = "50px" title = "Increase the quantity of an item."></a>
			<a href = "minus.php"><img src = "images/minus.png" height = "50px" title = "Decrease the quantity of an item."></a></br></br>
			<form action = "#" method = "GET">
				<label>Item: <br/>
				<input type = "text" name = "item"></label></br></br>
				<label>Category: <br/>
				<input type = "text" name = "category"></label></br></br>
				<label>Price: <br/>
				<input type = "text" name = "price"></label></br></br>
				<label>Quantity: <br/>
				<input type = "text" name = "quantity"></label></br></br>
				<label>Storage unit: <br/>
				<input type = "text" name = "storage_unit"></label></br></br>
				<input type = "submit" name = "insert" value = "Insert to DB">
			</form>
		</div>
			<?php
				include_once 'inc/storeInsert.php';
			?>
	</div> 
</body>

</html>