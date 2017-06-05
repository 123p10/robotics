<?php
//Setup Requirements
/*
1. XAMPP
2. MySQL
3. MySQL database named robot
4. Inside robot database there is a table Users
	i. With column id,username,email and priv
	ii. id is int(6) with autoincrement
	iii. username,password is varchar(30)
	iv. email is varchar(50)
	v. priv is int(6)

*/





#Change 127.0.0.1 for connecting multiple devices to the ip address of the server
$servername = "127.0.0.1";
$username = "username";
$password = "password";
$dbname = "robot";

#MAKE SURE WHEN TESTING TO DISABLE COOKIES OR TO WIPE THEM OR YOU CANNOT CHANGE SITES
session_start();
#Retrieve the input information from login.php
$u = $_POST['user'];
$p = $_POST['pass'];

$hash = password_hash($p, PASSWORD_DEFAULT);

#Connect to Server
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
#Find row with username entered and password
$sql = "SELECT * FROM Users WHERE username = '$u'";
#What did the search find
$result = mysql_query($sql);
#How many rows
$count = mysql_num_rows($result);
$result = mysqli_query($conn, $sql);

#If there is more than 1 row applicable
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
		$isValid = password_verify($p, $row['password']);
		if($isValid){
			success($u,$p);
		}
		else{
			fail();
		}
	}
} 
else{
	fail();
}
$conn->close();



function success($usertmp,$passtmp){
	#Store username and password in a session
	#For more session information see w3schools
	$_SESSION['user'] = $usertmp;
	#We don't need to store the password we can look it up with the username

	#Goto main.php
	header('location:home.php');
}
function fail(){
	#Goto login.php
	header('location:login.php');
}

?>