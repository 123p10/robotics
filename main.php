<html>

<body style="background-color:#5a5b5b">

<div style="position:absolute;" id="wrapper">


  <span style="id='u'color: #FFFFFF;position:absolute;left:1400px; font-size:30px; font-family: 'Franklin Gothic Medium','Franklin Gothic','ITC Franklin Gothic',Arial,sans-serif;">Welcome <?php 
  session_start();
  if(isset($_SESSION['user'])){
	  echo $_SESSION['user'];
  }
  else{
	  echo "err";
	 # header("location:login.php");
  }
  ?><br>
  <button onClick="logout()">LOGOUT</button>
  </span>
  <button onClick="home()"style="position:absolute;left:215px;width:150px;height:115px;top:-8px;border-radius:0px;"><span style="font-size:30px;">Home</span></button>
  <button onClick="videos()"style="position:absolute;left:364px;width:150px;height:115px;top:-8px;border-radius:0px;"><span style="font-size:30px;">Videos</span></button>
  <button onClick="chat()"style="position:absolute;left:513px;width:150px;height:115px;top:-8px;border-radius:0px;"><span style="font-size:30px;">Chat</span></button>
  <button onClick="tutorial()"style="position:absolute;left:662px;width:150px;height:115px;top:-8px;border-radius:0px;"><span style="font-size:30px;">Tutorial</span></button>

<div id="rectangle" style="position:absolute; margin-top: -375px;top:475px;left:50%;
   margin-left: 200px;width:1500px;height:2000px;background-color:#FFFFFF;border-radius: 25px;
">
</div>
</div>
</body>
</html>
<script>
	function logout(){
		//document.cookie = "user=;expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
		location.href = '/robot/login.php';
	}
	function home(){
		//NOTE 
		//CHANGE THIS
		//IT HAS TOO BE SET TO WHERE MAIN IS LOCATED
		//
		//
		location.href = '/robot/home.php';
	}
	function videos(){
		location.href = '/robot/videos.php';
	}
	function chat(){
		location.href = '/robot/chat.php';
	}
	function tutorial(){
		location.href = '/robot/tutorial.php';
	}
</script>