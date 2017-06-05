<?php
session_start();
if(isset($_SESSION['user'])){
	unset($_SESSION['user']);
}
?>
<html>
<body style="background-color: #274472">
<div id="rectangle" style="position:absolute; margin-top: -325px;top:50%;left:50%;
   margin-left: -325px;width:650px;height:650px;background-color:white;border-radius: 25px;
">
<span style="position:absolute;left:250px;text-align:center;font-family: Verdana, Geneva, sans-serif; font-size:24px; color:#274472;font-size:300%;">LOGIN</span>

<?php

 ?>
<form action="loginclass.php"method="post">
	<br><br><br><br><br><br><br><br><br><br>

	<span style="position:absolute;left:280px;font-family: Verdana, Geneva, sans-serif; font-size:20px;top:170px">Username:</span>
	<br>
	<input type="text"id="user"name="user" style="font-size:25;position:absolute;left:75px;border-radius:20px;height:50px;width:500px;">	</input>
	<br><br><br><br><br><br><br><br>
	<span style="position:absolute;left:280px;font-family: Verdana, Geneva, sans-serif; font-size:20px;top:330px">Password:</span>
	<br>
	<input type="password"name="pass"id="pass" style="font-size:25;position:absolute;left:75px;border-radius:20px;height:50px;width:500px;">	</input>
	<br><br><br><br>
	<span style = "position:absolute;left:250px;width:160px;height:50px;">
	<input type="submit"   name="login"style="width:150px;height:75px;border-radius:20px;" value="LOGIN">
	</button>
	</span>
</form>
<a style="position:absolute;left:285px;top:550px;"href="register.php">REGISTER</a>

</div>
</body>
</html>