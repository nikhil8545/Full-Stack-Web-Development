<?php
include('config.php');
?>
<?php
if (isset($_POST['btn']))
{
echo "Dear, ".$_POST['name']." your are welcome".'<br>';	
echo $_POST['id'];

$username = $_POST['name'];

$age = $_POST['age'];

$contact = $_POST['contact'];

$email = $_POST['email'];

$sql = "INSERT INTO `user` (name, age, contact, email)
VALUES ('$username','$age','$contact','$email')";
mysqli_query($conn, $sql);
}
 else{
 	echo "welcome guest";
 }
?>