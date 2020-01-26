<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>FARMER DETAILS</title>
<link rel="stylesheet" type="text/css"
	 href="css/add1.css">
	
</head>

<body>
    <header id="main-header">
	  <div class="container">
	  <h1>DAIRY RECORD MANAGEMENT SYSTEM</h1>
	  </div>	
	</header>
	<nav id="navbar">
	  <div class="container">
	  <ul>
	    <li><a href="index.php">home</a></li>
		<li><a href="farmer.php">farmer </a></li>
		<li><a href="employee.php">employee</a></li>
		<li><a href="delivery.php">delivery</a></li>
		<li><a href="payment.php">payment</a></li>
		<li><a href="setting rate.php">setting rate</a></li>
	  </ul>
	  </div>
	</nav>
	<br>
	<a class="button" href="addfarmer.php" >Add farmer details</a><br><br>
	<div class="heading-1">
	  <h1>FARMER DETAILS</h1>
	  </div>
	  
	 
	  
	  
	<?php
	$sql = mysqli_query($conn,"select * from farmer");
     echo"<table>";
     echo"<tr> <th>FARMER ID</th> <th>NAME</th> <th>ADDRESS</th> <th>PHONE N0.</th> <th>ACCOUNT NO.</th> <th>update</th> <th>delete</th></tr>";
     while($arr=mysqli_fetch_row($sql))
    {
	    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td><a href=updatefarmer.php?f_id=".$arr[0]." >update</a></td>  <td><a href=delfarmer.php?f_id=".$arr[0]." >delete</a></td></tr>";
    }
	 ?>
	
	
</body>
</head>	