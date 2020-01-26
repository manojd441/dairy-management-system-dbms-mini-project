<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>employee registration</title>
<link rel="stylesheet" type="text/css"
	 href="css/login.css">
	 <link rel="stylesheet" type="text/css"
	 href="css/main.css">
</head>

<body>
<header id="main-header">
	  <div class="container">
	  <h1>DAIRY RECORD MANAGEMENT SYSTEM</h1>
	  </div>	
	</header>
	<div class="heading-1">
	  <h1>ENTER YOUR DETAILS</h1>
	  </div>
<form class="my-form" method="GET" >
	 <div>
	 EMPLOYEE ID:<input type="text" name="e_id" placeholder="Enter your id">
	  </div>
	   <br>
	  <div>
	  NAME:<input type="text" name="e_name" placeholder="Enter your name">
	  </div>
	  <br>
	  <div>
	  USERMAIL:
	    <input type="text" name="e_mail" placeholder="Enter your mail">
	  </div>
	  <br>
	  <div>
	  PASSWORD:
	    <input type="text" name="e_pass" placeholder="Enter your password">
	  </div>
	  <br>
	  <div>
	  ROLE:
	    <input type="text" name="e_role" placeholder="Enter your role">
		
	  </div>
	  <br>
	  <div>
	  ADDRESS:
	    <input type="text" name="e_address" placeholder="Enter your address">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="submit">
	 </form>
	 
	 <?php
	  
	    if($_GET['submit'])
		{
		  $e_id = $_GET['e_id'];
		  $b = $_GET['e_name'];
		  $c = $_GET['e_mail'];
		  $d = $_GET['e_pass'];
		  $e = $_GET['e_role'];
		  $f = $_GET['e_address'];
		  
		  if($e_id!="" && $c!="")
		  {
		    $sql = "INSERT INTO employee VALUES('$e_id','$b','$c','$d','$e','$f')";
			$data = mysqli_query($conn,$sql);
			
			if($data)
			{
			  header('Location:auth.php');
			}
			else
			{
			  echo "not inserted";
			}
		  }}
		  
	 
	 ?>

</body>
</html>