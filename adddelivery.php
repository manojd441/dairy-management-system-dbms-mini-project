<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>ADD DELIVERY DETAILS</title>
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
	<a href="delivery.php" class="button">Back To delivery</a>
	<div class="box-1">
	<div class="heading-1">
	  <h1>ENTER DELIVRY DETAILS</h1>
	  </div>
	  
<form class="my-form" method="GET" >
	 <div>
	 DELIVERY ID:<input type="text" name="d_id" placeholder="Enter delivery id">
	  </div>
	   <br>
	  <div>
	 FARMER ID:<input type="text" name="f_id" placeholder="Enter farmer id">
	  </div>
	   <br>
	  <div>
	  MILK QUANTITY:<input type="text" name="m_qty" placeholder="Enter milk quantity">
	  </div>
	  <br>
	  <div>
	  MILK FAT:
	    <input type="text" name="m_fat" placeholder="milk fat in %">
	  </div>
	  <br>
	  <div>
	  DELIVER BY:
	    <input type="text" name="d_by" placeholder="Enter deliverer name">
	  </div>
	  <br>
	   <div>
	  DELIVRY DATE:
	    <input type="date" name="d_date" placeholder="Enter delivery date" >
	  </div>
	  <br>
	  <div>
	  VERIFIED BY:
	    <input type="text" name="verified_by" placeholder="Enter employee id">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="submit">
	 </form>
	 </div>

    <?php
	  
	    if($_GET['submit'])
		{
		  $d_id = $_GET['d_id'];
		  $b = $_GET['f_id'];
		  $c = $_GET['m_qty'];
		  $d = $_GET['m_fat']; 
		  $e = $_GET['d_by'];
		  $f = $_GET['d_date'];
		  $g = $_GET['verified_by'];
		  
		  if($d_id!="" && $b!="" && $c!="" && $d!="" && $e!="" && $f!="" && $g!="")
		  {
		    $sql = "INSERT INTO delivery VALUES('$d_id','$b','$c','$d','$e','$f','$g')";
			$data = mysqli_query($conn,$sql);
			
			if($data)
			{
			  echo "inserted successfully";
			  header("refresh:1;url=delivery.php");
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