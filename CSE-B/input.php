<?php
include('config.php');
?>
<?php
if (isset($_POST['btn']))
{
	echo "Dear, ".$_POST['name']." your details are".'<br>';	
	echo $_POST['name'].'<br>';
	echo $_POST['age'].'<br>';
	echo $_POST['contact'].'<br>';
	echo $_POST['email'].'<br>';
}
?>
<html>
	<head>
	<title>Input From</title>
	</head>

	<body>
	<form action="addRecord.php" method="post">
	
		Name: <input type="text" name="name" placeholder="Enter name"><br>
		Age:<input type="text" name="age" placeholder="Enter Age"><br>
		Contact:<input type="text" name="contact" placeholder="Enter contact"><br> 
		email:<input type="email" name="email" placeholder="Enter email"><br>
		<input type="submit" name='btn'>
		</form>
		</body>
	</html> 