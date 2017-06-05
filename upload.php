<?php
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileName"]["name"]);
$canUpload = 1;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$user = $_COOKIE["user"];
if(isset($_POST["submit"])) {
	if(file_exists($target_file)){
		echo "It Already Exists";
		$canUpload = 0;
	}
	if($canUpload == 0){
		#header("location:videos.php");
		echo "This file already exists IDIOT";
	}
	else{
		if (move_uploaded_file($_FILES["fileName"]["tmp_name"], $target_file)) {
			$servername = "127.0.0.1";
			$username = "username";
			$password = "password";
			$dbname = "robot";
			
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$fn = $_POST['n'];
			$sql = "INSERT INTO videos (name,url,user)
			VALUES ('$fn','$target_file','$user')";			
			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	
			$conn->close();	
			header("location:videos.php");
		}
		else{
			if(is_writable("uploads/")){
				echo "Directory is writable";
			}
			echo "WTF ARE YOU DOING STOP IT IDIOT OVER 50Mb file CHILLLLLLLLL with that";
		#	header("location:videos.php");
		}
	}
}


function sqlUpload(){

}
?>
