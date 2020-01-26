<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>employee registration</title>
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
	<a href="employee.php" class="button">Back To employee</a>
	<div class="box-1">
	<div class="heading-1">
	  <h1>ENTER EMPLOYEE DETAILS</h1>
	  </div>
	  
	  
<form class="my-form" method="GET" >
	 <div>
	 EMPLOYEE ID:<input type="text" name="e_id" placeholder="Enter employeee id">
	  </div>
	   <br>
	  <div>
	  NAME:<input type="text" name="e_name" placeholder="Enter employee name">
	  </div>
	  <br>
	  <div>
	  EMAIL ID:
	    <input type="text" name="e_mail" placeholder="Enter email id">
	  </div>
	  <br>
	  
	  <div>
	  ROLE:
	    <input class="abc" type="text" name="e_role" placeholder="Enter employee role">
	  </div>
	  <br>
	  <div>
	  ADDRESS:
	    <input type="text" name="e_address" placeholder="Enter address">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="submit">
	 </form>
	 </div>
	 
	 <?php
	  
	    if($_GET['submit'])
		{
		  $e_id = $_GET['e_id'];
		  $b = $_GET['e_name'];
		  $c = $_GET['e_mail'];
		  $e = $_GET['e_role'];
		  $f = $_GET['e_address'];
		  
		  if($e_id!="" && $b!="" && $c!="" && $e!="" && $f!="")
		  {
		    $sql = "INSERT INTO employee VALUES('$e_id','$b','$c','$e','$f')";
			$data = mysqli_query($conn,$sql);
			
			if($data)
			{
			 echo "Inserted Successfully";
              header("refresh:1;url=employee.php");
			}
			else
			{
			  echo "not inserted";
			}
		  }}
		  
	 
	 ?>

</body>
</html>