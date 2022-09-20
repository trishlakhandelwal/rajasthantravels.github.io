<html>
<head>
<style>
.error {color: #FF0000;}

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


<h2>Traveller Details</h2>
<p><span class="error">* required field</span></p>
<p><span class="error">^ select atleast one option</span></p>
<form method="post" action="bill3.php">  
  Full Name: <input type="text" name="name" required>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Mobile: <input type="text" name="mobile" required>
  <span class="error">* <?php echo $mobileErr;?></span>
  <br><br>
  No. of passengers: <input type="number" name="pass" required>
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
   Date: <input type="date" name="datee" required>
  <span class="error">* <?php echo $dateeErr;?></span>
  <br><br>
  Accomodation:
  <input type="radio" name="acco" value="luxury" required>Luxury
  <input type="radio" name="acco" value="budget" required>Budget
  <span class="error">^ <?php echo $accoErr;?></span>
  <br><br>
  Address: <textarea name="address" rows="2" cols="20"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>

</body>
</html>