<?php require("main.php"); ?>

<html>
<body>
<!--<textarea class="scrollabletextbox" name="note"></textarea>-->
<div id="chat" style="background-color:#545556;color:#FFFFFF;position:absolute;left:250px;top:200px;width:1300px;height:500px;line-height:3em;overflow:scroll;padding:5px;">
	Bot: Welcome to the Chat

</div>

<form style="position:absolute;top:725px;left:250px">
	<input id="txt" type="text" style="width:1300px"></input>
	<button type="button"onclick="refreshSQL()" id="submit">Submit </button>
</form>
</body>
<script>
function refreshSQL(){
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("chat").innerHTML = this.responseText;
            }
			else{
				echo 'HI';
			}
        };
        xmlhttp.open("GET", "chatRefresh.php, true);
        xmlhttp.send();
}
</script>
</html>
