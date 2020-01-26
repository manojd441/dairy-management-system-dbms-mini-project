<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>RATES DETAILS</title>
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
	<a class="button" href="addsetting rate.php" >Add setting rate</a>
	  <br>
	  <br>
	
	<div class="heading-1">
	  <h1>RATES DETAILS</h1>
	  </div>
	  
	 
	  
	  
	<?php
	$sql = mysqli_query($conn,"select * from setting_rate");
     echo"<table>";
     echo"<tr><th>DATE FROM</th> <th>DATE TO</th> <th> RUPEES</th> </tr>";
     while($arr=mysqli_fetch_row($sql))
    {
	    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> </tr>";
    }
	
	
	
	
	?>
</body>
</head>	 