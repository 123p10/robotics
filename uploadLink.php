<?php 
session_start();

$servername = "127.0.0.1";
$username = "username";
$password = "password";
$dbname = "robot";	
$u = $_SESSION['user'];
$target_file = $_POST['link'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$fn = $_POST['n'];
$sql = "INSERT INTO videos (name,url,user)
VALUES ('$fn','$target_file','$u')";			
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	header("location:videos.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>