<html>
<head>
<title>students</title>
</head>
<body>
<h1>Display students details</h1>
<?php
$server = "localhost";
$user = "root";
$pw = "";
$db = "university";

$conn = new mysqli($server, $user, $pw, $db);
$sql = "SELECT id,name,email,password FROM students";
$results = $conn->query($sql);
if($results->num_rows>0)
{
	while($row=$results->fetch_assoc()){
		echo "Student Id:".$row["id"]."<br>Name:".$row["name"]."<br>email:".$row["email"]."<br>password:".$row["password"]."<br><br>";
	}
}
else
{
	echo "no data";
}
$conn->close();
?>
</body>
</html>