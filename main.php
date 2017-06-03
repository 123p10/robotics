<html>

<body style="background-color:#5a5b5b">

<div style="position:absolute;" id="wrapper">


  <span style="id='u'color: #FFFFFF;position:absolute;left:1400px; font-size:30px; font-family: 'Franklin Gothic Medium','Franklin Gothic','ITC Franklin Gothic',Arial,sans-serif;">Welcome </span>
  <button onClick="home()"style="position:absolute;left:215px;width:150px;height:115px;top:-8px;border-radius:0px;"><span style="font-size:30px;">Home</span></button>
  <button onClick="videos()"style="position:absolute;left:365px;width:150px;height:115px;top:-8px;border-radius:0px;"><span style="font-size:30px;">Videos</span></button>

<div id="rectangle" style="position:absolute; margin-top: -375px;top:475px;left:50%;
   margin-left: 200px;width:1500px;height:2000px;background-color:#FFFFFF;border-radius: 25px;
">
</div>
</div>
</body>
</html>
<script>
	/*setUser();
	function setUser(){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				document.getElementById('u').innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET","getPHP.php?q=user",true);
		xhttp.send();
	}*/

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
</script>