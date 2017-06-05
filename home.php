<?php require("main.php"); ?>
<html>
<body>
<div style="position:absolute;left:250px;top:200px; width:1000px;word-wrap: normal;">
	<?php 
	$servername = "127.0.0.1";
	$username = "username";
	$password = "password";
	$dbname = "robot";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT id,poster,txt,reg_date FROM announce";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo $row['reg_date'] . "<br>" . $row['txt'] . "<br><br><br><br>";
		}
	} else {
		echo "0 results";
	}
	
	?>
</div>
<div style="position:absolute;left:1300px;top:200px;">
	<?php
		echo "<b>Welcome " . $_SESSION['user'] . "</b>";
	?>
	<button onClick="input()">INPUT ANNOUNCEMENT</button>
</div>
</body>
</html>
<script>
function input(){
	location.href = "announceInput.php";
}
</script>