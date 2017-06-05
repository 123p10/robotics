<?php 
$servername = "127.0.0.1";
$username = "username";
$password = "password";
$dbname = "robot";
session_start();
$poster = $_SESSION['user'];
if(isset($_GET["textInput"])){
	$text = $_GET["textInput"];
}
else{
	echo "text was not set";
}
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO announce (poster, txt)
	VALUES ('$poster','$text')";
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	header("location:home.php");
} else {
	#Leave fail commented so we can debug errors. 
	#fail();
	echo "Error: " . $sql . "<br>" . $conn->error;
}



?>