<html>
<head>
<title>Record</title>
</head>
<body>

<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `user`";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
?>

<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Contact</th>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>

<?php
	while($data = $result->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['name'] ?></td>
			<td><?php echo $data['age'] ?></td>
			<td><?php echo $data['contact'] ?></td>
			<td><?php echo $data['email'] ?></td>
			<td><a href="edit.php?id="<?php echo $data['id'];?>">Edit</a></td>
			<td>Delete</td>
		</tr>
	<?php } ?>
	</tbody>

<?php } ?>
</table>
</body>
</html>

