<html>
<head>
<title>chittorgarh</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
	function show()
	{
		var x=document.getElementById("1");
		if(x.style.display==="none")
			x.style.display="block";
		else
			x.style.display="none";
	}
	
	function show2()
	{
		var x=document.getElementById("2");
		if(x.style.display==="none")
			x.style.display="block";
		else
			x.style.display="none";
	}
	
</script>
</head>
<body>
<div class="nav">
		<a href="home.php">Home</a>
		<a href="login.php">LogIn</a>
		<a href="register.php">Register</a>
		<a href="about.php">About Us</a>
	</div>
<div class="frame">

<h1>CHITTORGARH</h1>
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57900.7858862741!2d74.5865746412!3d24.904832862308908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3968a0424d11a8d9%3A0x79f097c869345f8d!2sChittorgarh%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1554128806958!5m2!1sen!2sin" width="100%" height="100%" position="absolute" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<h1> PLACES TO VISIT</h1>
<h2>01 Chittorgarh Fort</h2>

<div class="container">
	<img class="slides" src="./chittorgarhdone_files/chittorgarh fort.jpg" height="350px" width="100%">
</div><br><br>

<div class="content">
The Chittorgarh Fort is the largest fort in India and the grandest fort in the state of Rajasthan. The fort, which is also called Chittor, was the seat of power of the rulers of Mewar.
<br><br></div>

<div class="content" id="1" style="display: none;">
The fort was attacked three times between the 15th and 16th centuries and was captured by invaders. 
</div>

<button class="btn" type="button" onclick="show()">Show more/less</button>
<br><br>

<h2>	02 Bijaipur<br></h2>

<div class="container">
	<img class="slides" src="./chittorgarhdone_files/bijaipur.jpg" height="350px" width="100%">
</div><br><br>

<div class="content">
Bijaipur stretches through the foot of the Vindhyachal hills. Bijaipur is a small place which is highly popular because of its Castle. Surrounded by woods of Jacaranda from all sides, the village typically fosters a rural backdrop for the tourist at large.
</div><br>

<div class="content" id="2" style="display: none;">
<b>Distance or location:</b> Bijaipur is located in Rajasthan at the foot of Vindhyachal hills.<br><br>

<b>Best time to visit:</b> Best time to visit Bijaipur is during the winter time in between the months October to March.<br><br>

<b>Charges:</b>There are no charges incurred on visiting Bijaipur.<br><br>


</div>

<button class="btn" type="button" onclick="show2()">Show more/less</button>
<br><br>

<div class="footer">

</div>

</div></body></html>