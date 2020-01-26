<?php
 include ("connection.php");
 
 error_reporting(0);
?>

<html>
<head>
<title>ADD PAYMENT DETAILS</title>
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
	
	  <a href="payment.php" class="button">payment details</a>

	
	<div class="box-1">
	<div class="heading-1">
	  <h1>ENTER PAYMENT DETAILS</h1>
	  </div>
	  
	
	  
	
<form class="my-form" method="GET" >
	 <div>
	 PAYMENT ID:
	 <input type="text" name="p_id" placeholder="Enter PAYMENT id">
	  </div>
	   <br>
	  <div>
	 DELIVERY ID:
	 <input type="text" name="d_id" placeholder="Enter delivery id">
	  </div>
	   <br>
	  <div>
	 
	  PAYMENT DATE:
	    <input type="date" name="p_date" placeholder="Enter payment date">
	  </div>
	  <br>
	   <div>
	  PAYMENT METHOD:
	    <input type="text" name="p_method" placeholder="Enter payment method">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="submit">
	 </form>
</div>
    <?php
	 
	  
	    if($_GET['submit'])
		{
		  $p_id = $_GET['p_id'];
		  $b = $_GET['d_id'];
		  $c = $_GET['p_date'];
		  $d = $_GET['p_method'];
		  
		  if($p_id!="" && $b!="" && $c!="" && $d!=""  )
		  {
		    $sql = "INSERT INTO payment VALUES('$p_id','$b','$c','$d')";
			$data = mysqli_query($conn,$sql);
			
			if($data)
			{
			  echo "inserted successfully";
			  header("refresh:1;url=payment.php");
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