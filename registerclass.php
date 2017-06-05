<?php
#Change 127.0.0.1 to the ip address of the server for connecting multiple devices
$servername = "127.0.0.1";
$username = "username";
$password = "password";
$dbname = "robot";


session_start();
#Retrieve input information
$u = $_POST['user'];
$p = $_POST['pass'];
$e = $_POST['email'];
$privs = $_POST['priv'];
$hash = password_hash($p, PASSWORD_DEFAULT);


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$exist = false;
$sql = "SELECT id, username, password, email FROM Users";
$result = $conn->query($sql);
#If account already exists fail
while($row = $result->fetch_assoc()) {
	if($row["username"] == $u || $row["email"] == $e){
		fail();
		$exist = true;
		break;				
	}
}
#If username or pass are empty fail
if(empty($u) || empty($p)){
	fail();
}
#Here is where we can succeed
else if(!$exist){
	$sql = "INSERT INTO Users (username, password,email,priv)
		VALUES ('$u', '$hash','$e','$privs')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		success();
	} else {
		#Leave fail commented so we can debug errors. 
		#fail();
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
else{
	fail();
}


$conn->close();

function fail(){
	header('location:register.php');
}
function success(){
	header('location:login.php');
}

?>