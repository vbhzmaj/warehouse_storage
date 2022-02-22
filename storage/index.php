<html>
<head>
	<meta charset = "utf-8 ">
	<title>Skladiste</title>
	<link rel = "stylesheet" type = "text/css" href = "css/style.css">
</head>
<body>
	<div id = "wrap">
		<div id = "search">
			<img src = "images/search.png"></br></br>
			<a href = "add.php"><img src = "images/add.png" height = "50px" title = "Add an item to DB."></a>
			<a href = "remove.php"><img src = "images/remove.png" height = "50px" title = "Remove an item from DB."></a>
			<a href = "plus.php"><img src = "images/plus.png" height = "50px" title = "Increase the quantity of an item."></a>
			<a href = "minus.php"><img src = "images/minus.png" height = "50px" title = "Decrease the quantity of an item."></a></br></br>
			<form action = "#" method = "GET">
				<input type = "text" placeholder = "An item or a category..." name = "criteria"></br></br>
				<input type = "submit" value = "Search"> 
			</form>
		</div>
		<div id="search_display">
			<p>Search results:</p>
				<?php
					include 'inc/getResults.php';
				?>
		</div>	
	</div> 
</body>
</html>