<?php
$id = $_GET['id']
echo "Id to be updated-".$id;
?>
<html>
	<head>
	<title>Input From</title>
	</head>

	<body>
	<form action="edit.php" method="post">
	
		Name: <input type="text" name="name" placeholder="Enter name"><br>
		Age:<input type="text" name="age" placeholder="Enter Age"><br>
		Contact:<input type="text" name="contact" placeholder="Enter contact"><br> 
		email:<input type="email" name="email" placeholder="Enter email"><br>
		<input type="submit" name='btn'>
		</form>
		</body>
	</html> 