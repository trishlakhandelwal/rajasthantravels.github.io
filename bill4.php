<html>
<head>
<style>
	h2{
	text-decoration:bold;
	font-size:30px;
	}
	
	.main{
	width: 30%;
  margin: 50px auto 0px;
  color:black;
  background:#d8d8d8;
  text-align: center;
  border: 1px solid black;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
	}
	
</style>
</head>
<body>
<div class="main">
<?php
$conn=new mysqli("localhost","root","","tourguide");
$nameErr = $emailErr = $accoErr = $mobileErr = $passErr = $dateeErr="";
$name = $email = $acco = $address = $mobile = $pass = $datee= $packname= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
  }
    
  if (empty($_POST["mobile"])) {
    $mobileErr = "Mobile is required";
  } else {
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  }

  if (empty($_POST["pass"])) {
    $passErr = "Passengers are required";
  } else {
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  }
  
  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = mysqli_real_escape_string($conn, $_POST['address']);
  }

  if (empty($_POST["datee"])) {
    $dateeErr = "Date is required";
  } else {
    $datee = mysqli_real_escape_string($conn, $_POST['datee']);
  }
  
  if (empty($_POST["acco"])) {
    $accoErr = " Select atleast one option";
  } else {
    $acco = mysqli_real_escape_string($conn, $_POST['acco']);
  }
 
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Bill Details:</h2>";
echo "<br><br>";
echo "<b>Name </b>".$name;
echo "<br><br>";
echo "<b>Travel Date </b> ".$datee;
echo "<br><br>";
echo "<b>Total Passengers </b> ".($pass);
echo "<br><br>";
echo "<b>Accomodation type: </b>".$acco;
echo "<br><br>";
$answer=$_POST['acco'];
if($acco=="budget")
	echo "<b>Bill Total($pass*22000)</b>   ".($pass*15000)."<br>";
else
	echo "<b>Bill Total($pass*22000)</b>	".(($pass*15000)+25000)."<br>";
echo "<br><br>";
echo "<br><br>";
$a=$name;
$b=$email;
$c=$acco;
$d=$mobile;
$e=$pass;
$f=$datee;

/*if(isset($_POST["bt1"]))
{
	if($conn->connect_error)
	die("Connection failed:".$conn->connect_error);
	
	$sql="INSERT INTO customer_details(Name,E_mail,Accomodation,Mobile,Passengers,Date) VALUES('$a','$b','$c','$d','$e','$f')";
	echo "$sql"; 
	if($conn->query($sql)==TRUE)
	{
		echo "BOOKING CONFIRMED";
	}
	else 
		echo "not done";
}*/

?>
<form method="POST">
<input type="submit" class="btn" name="bt1" value="CONFIRM BOOKING" onclick='window.alert("Your booking has been confirmed")'></input>
</form>
</div>
</body>
</html>