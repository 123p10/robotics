<?php require("main.php"); ?>

<html>
<body>
<span style="position:absolute;left:250px;top:200px;font-size:35px;">
	<?php
	$servername = "127.0.0.1";
	$username = "username";
	$password = "password";
	$dbname = "robot";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT id, name, url FROM videos";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<a href='" . htmlspecialchars($row["url"]) . "'>" . htmlspecialchars($row["name"]) . "</a>" . "<br>";
		}
	}
	else {
		echo "0 Videos Found.";
	}
	
	
	?>
</span>



<form method="post" action="upload.php" enctype="multipart/form-data" style="position:absolute;left:1100px;top:150px">
    Select video to upload:
    <input type="file" name="fileName" id="fileName">
    <input type="submit" value="Upload Video" name="submit">
	<br>
	FileName: 
	<input type="text" name="n" id="n">
</form>
<br>

<form method="post" action="uploadLink.php" enctype="multipart/form-data" style="position:absolute;left:1100px;top:350px">
    Select link to upload:
    <input type="text" name="link" id="link">
    <input type="submit" value="Upload Video" name="submit">
	<br>
	FileName: 
	<input type="text" name="n" id="n">
</form>



</body>
</html>