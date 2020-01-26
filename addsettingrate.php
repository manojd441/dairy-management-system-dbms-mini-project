<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>ADD DETAILS ABOUT RATES</title>
<link rel="stylesheet" type="text/css"
	 href="css/login.css">
</head>

<body>
<header id="main-header">
	  <div class="container">
	  <h1>DAIRY RECORD MANAGEMENT SYSTEM</h1>
	  </div>	
	</header>
	<div class="heading-1">
	  <h1>ENTER  RATES DETAILS</h1>
	  </div>
	  <a href="setting rate.php" class="button">Back To setting rate</a>
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
	  RUPEES:<input type="text" name="rs" placeholder="Enter present rate ">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="submit">
	 </form>

    <?php
	  
	    if($_GET['submit'])
		{
		  $a = $_GET['date_from'];
		  $b = $_GET['date_to'];
		  $c = $_GET['rs'];
		  
		  
		  if($a!="" && $b!="" && $c!="")
		  {
		    $sql = "INSERT INTO setting rate VALUES('$a','$b','$c')";
			$data = mysqli_query($conn,$sql);
			
			if($data)
			{
			  echo "added successfully";
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