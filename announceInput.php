<?php require("main.php"); 

if($_SESSION['user'] != '123p10'){
	header("location:home.php");
}

?>
<html>
<body>

<form method="get" action="uploadAnnounce.php">
	<div style="position:absolute;left:300px;top:200px;">
		<textarea name="textInput"id="textInput" style="width:1000px;height:600px;">
<span style="font-family:Arial">
<h1>Title</h1>
<h4>User</h4>
TEXT HERE
</span>
		</textarea>
		<br>
		<span id="output"style="width:1000px;height:600px;word-wrap: normal;"></span>
	</div>
		<input id="submit"type="submit" style="position:absolute;left:1300px;top:780px"></input>
</form>
</body>
</html>
<script>
var input = document.getElementById('textInput');
document.getElementById('output').innerHTML = input.value;

input.onkeyup = input.onkeypress = function(){
    document.getElementById('output').innerHTML = this.value;
}
</script>