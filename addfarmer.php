<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>ADD FARMER DETAILS</title>
<link rel="stylesheet" type="text/css"
	 href="css/add.css">
	 
</head>

<body>
<header id="main-header">
	  <div class="container">
	  <h1>DAIRY RECORD MANAGEMENT SYSTEM</h1>
	  </div>	
	</header>
	<br>
	 <a href="farmer.php" class="button">Back To Farmers</a>
	<div class="box-1">
	<div class="heading-1">
	  <h1>ENTER FARMER DETAILS</h1>
	  </div>
	  
<form class="my-form" method="GET" >
	 <div>
	 FARMER ID:<input type="text" name="f_id" placeholder="Enter your id">
	  </div>
	   <br>
	  <div>
	  FARMER NAME:<input type="text" name="f_name" placeholder="Enter your name">
	  </div>
	  <br>
	  <div>
	  ADDRESS:
	    <input type="text" name="f_address" placeholder="Enter your address">
	  </div>
	  <br>
	  <div>
	  PHONE NUMBER:
	    <input type="text" name="f_phone" placeholder="Enter your phone no.">
	  </div>
	  <br>
	   <div>
	  FARMER ACCOUNT:
	    <input type="text" name="f_ac" placeholder="Enter your account no.">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="submit">
	 </form>
</div>
    <?php
	  
	    if($_GET['submit'])
		{
		  $f_id = $_GET['f_id'];
		  $b = $_GET['f_name'];
		  $c = $_GET['f_address'];
		  $d = $_GET['f_phone']; 
		  $e = $_GET['f_ac'];
		  
		  if($f_id!="" && $b!="" && $c!="" && $d!="" && $e!="" )
		  {
		    $sql = "INSERT INTO farmer VALUES('$f_id','$b','$c','$d','$e')";
			$data = mysqli_query($conn,$sql);
			
			if($data)
			{
			  echo "Inserted Successfully";
              header("refresh:1;url=farmer.php");
			}
			else
			{
			  echo "not inserted";
			}
		  }}
		  
	 
	 ?>


</body>
</html>