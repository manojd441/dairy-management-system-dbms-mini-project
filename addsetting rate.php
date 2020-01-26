<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>ADD DETAILS ABOUT RATES</title>
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
	<a href="setting rate.php" class="button">Back To setting rate</a>
	<div class="box-1">
	<div class="heading-1">
	  <h1>ENTER  RATES DETAILS</h1>
	  </div>
	  
<form class="my-form" method="GET" >
	 <div>
	 DATE FROM:<input type="date" name="date_from" placeholder="Enter started date">
	  </div>
	   <br>
	  <div>
	 DATE TO:<input type="date" name="date_to" placeholder="Enter ended date">
	  </div>
	   <br>
	  <div>
	  RUPEES:<input type="text" name="rs" placeholder="Enter rates for per ltr ">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="submit">
	 </form>
</div>
    <?php
	  
	    if($_GET['submit'])
		{
		  $date_from = $_GET['date_from'];
		  $b = $_GET['date_to'];
		  $c = $_GET['rs'];
		  
		  
		  if($date_from!="" && $b!="" && $c!="")
		  {
		    $sql = "INSERT INTO setting_rate VALUES('$date_from','$b','$c')";
			$data = mysqli_query($conn,$sql);
			
			if($data)
			{
			  echo "inserted successfully";
			   header("refresh:1;url=setting rate.php");
			}
			else
			{
			  echo "not inserted";
			}
		  }
		  else
			{
			  echo "all fields required";
			}
		  }
		  
		  
	 
	 ?>


</body>
</html>