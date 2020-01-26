

<html>
<head>
<title>PAYMENT DETAILS</title>
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
	<a class="button" href="addpayment.php" >Add payment details</a>
	  <br>
	  <br>
	<div class="heading-1">
	  <h1>PAYMENT DETAILS</h1>
	  </div>
	  
	  
	<?php
	
	
	$db_host="localhost";
    $db_name="milk";
    $db_user="root";
    $db_pass="";
    $con= mysqli_connect("$db_host","$db_user","$db_pass")or die("could not connect");
    mysqli_select_db($con,'milk') or die(mysqli_error($con));
	
	
     $rs=mysqli_query($con,"CALL details(@p0, @p1, @p2, @p3, @p4, @p5,@p6);");
  
	 if($rs){
	 echo"<table>";
     echo"<tr><th>DELIVERY ID</th> <th>PAYMENT ID</th> <th>PAYMENT TO</th> <th>PAYMENT DATE</th> <th> QUANTITY in ltr</th> <th>PAYMENT RUPEES</th> <th>PAYMENT METHOD</th></tr>";
     while($arr=mysqli_fetch_row($rs))
    {
		error_reporting(0);
		 echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> </tr>";
		 
    }
	 }
	 ?>
	 </table>
	<h2>
	 <?php

	$conn= mysqli_connect("$db_host","$db_user","$db_pass")or die("could not connect");
    mysqli_select_db($conn,'milk') or die(mysqli_error($conn));
	
     $p1=mysqli_query($conn,"call amtsum(@out);");
     $res=mysqli_query($conn,'SELECT @out');
     while($row=mysqli_fetch_row($res))
     {
      echo 'Total Payment Transacted=' .$row[0];
     }
	 
     mysqli_close($con); 
	 
 
	?>
	 </h2>
	
	
	
</body>
</head> 