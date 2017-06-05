<html>
<body style="background-color: #274472">
<div id="rectangle" style="position:absolute; margin-top: -325px;top:50%;left:50%;
   margin-left: -325px;width:650px;height:650px;background-color:white;border-radius: 25px;
">
<span style="position:absolute;left:250px;text-align:center;font-family: Verdana, Geneva, sans-serif; font-size:24px; color:#274472;font-size:300%;">REGISTER</span>


<form action="registerclass.php"method="post">

	<span style="position:absolute;left:0px;font-family: Verdana, Geneva, sans-serif; font-size:20px;top:210px">Username:</span>
	<br>
	<input type="text"id="user"name="user" style="font-size:25;position:absolute;left:150px;top:200px;border-radius:20px;height:50px;width:500px;">	</input>
	<span style="position:absolute;left:0px;font-family: Verdana, Geneva, sans-serif; font-size:20px;top:260px">Password:</span>
	
	<input type="password"name="pass"id="pass" style="top:250px;font-size:25;position:absolute;left:150px;border-radius:20px;height:50px;width:500px;">	</input>
	
	<span style="position:absolute;left:0px;font-family: Verdana, Geneva, sans-serif; font-size:20px;top:310px">Email:</span>
	<input type="text"name="email"id="email" style="top:300px;font-size:25;position:absolute;left:150px;border-radius:20px;height:50px;width:500px;">	</input>

	<span hidden style="position:absolute;left:0px;font-family: Verdana, Geneva, sans-serif; font-size:20px;top:360px">Priviliges:</span>
	<input hidden value="1" type="text"name="priv"id="priv" style="top:350px;font-size:25;position:absolute;left:150px;border-radius:20px;height:50px;width:500px;">	</input>

	<span style = "position:absolute;left:250px;width:160px;height:50px;top:400px">
		<input type="submit" name="login"style="width:150px;height:75px;border-radius:20px;" value="REGISTER">

	</span>
</form>
<a style="position:absolute;left:300px;top:550px;"href="Login.php">Login</a>

</div>
</body>
</html>