<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','busy');

// get the post records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$datee = $_POST['datee'];
$phoneno = $_POST['phoneno'];
$designation = $_POST['designation'];
$gender = $_POST['gender'];
$sports = $_POST['sports'];

// database insert SQL code
$sql = "INSERT INTO `busy` (`Id`, `firstname`, `lastname`, `email`, `datee`, `phoneno`, `designation`, `gender`, `sports`) VALUES ('0', '$firstname', '$email', '$datee', '$phoneno', '$designation', '$gender', '$sports')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
<br><a href="contact.html" rel="nofollow ugc">Add New Record</a><br>