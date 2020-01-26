<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>EMPLOYEE DETAILS</title>
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
	<a class="button" href="addemployee.php" >Add employee details</a>
	  <br><br>
	<div class="heading-1">
	  <h1>EMPLOYEE DETAILS</h1>
	  </div>
	  

	
	
	  
	  
	<?php
	$sql = mysqli_query($conn,"select * from employee");
     echo"<table>";
     echo"<tr><th>EMPLOYEE ID</th> <th>NAME</th> <th>EMAIL ID</th> <th>ROLE</th> <th>ADDRESS</th> <th>update</th> <th>delete</th></tr>";
     while($arr=mysqli_fetch_row($sql))
    {
	    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td><a href=updateemployee.php?e_id=".$arr[0].">update</a></td> <td><a href=delemployee.php?e_id=".$arr[0].">delete</a></td> </tr>";
    }
	
	
	
	
	?>
</body>
</head>	