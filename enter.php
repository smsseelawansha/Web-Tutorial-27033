<?php
$server = "localhost";
$user = "root";
$pw = "";
$db = "university";

$conn = new mysqli($server, $user, $pw, $db);
$a = $_REQUEST['stdid'];
$b = $_REQUEST['name'];
$c = $_REQUEST['email'];
$d = $_REQUEST['pword'];
$sql = "INSERT INTO students(id,name,email,password) Values('$a','$b','$c','$d')";
if($conn->query($sql) == true)
{
	echo "successfully updated";
}
else
{
	echo "error" , $conn->error;
}
$conn->close();
?>