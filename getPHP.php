<?php 
session_start();
$q = $_REQUEST['q'];
if($q == "user"){
	echo $_SESSION["USER"];
}
else{
	echo "error";
}
?>