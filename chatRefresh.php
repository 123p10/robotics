<?php
$servername = "127.0.0.1";
$username = "username";
$password = "password";
$dbname = "robot";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, date, text, name FROM chat";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['date'] . " " . $row['name'] . ": " . $row['text'];
    }
} else {
    echo "0 results";
}
?>