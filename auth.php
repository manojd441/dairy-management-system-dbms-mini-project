<?php
$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($dbh,'milk') or die(mysqli_error($dbh));
if(isset($_POST['e_mail'])){
   $e_mail=$_POST['e_mail'];
   $e_pass=$_POST['e_pass'];
   
   $sql="select * from employee where e_mail='".$e_mail."' AND e_pass='".$e_pass."' 
   limit 1";
   $result=mysqli_query($dbh,$sql);
   if(mysqli_num_rows($result)==1){
     header('Location:index.php');
	 exit();
   }
   else{
   echo "incorrect password";
   exit();
   }
}
?>
<html>
  <head>
    <title>login page</title>
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
	
	<div class="container">
    <div class="box-1">
    <h1>Welcome!!!</h1>
	<hr>
	 <form class="my-form" method="POST" action="#">
	 <div>
	 <label>USERMAIL:</label>
	    <input type="email" name="e_mail" placeholder="Enter your usermail">
	  </div>
	   <br>
	  <div>
	  <label>PASSWORD:</label>
	    <input type="text" name="e_pass" placeholder="Enter your password">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="LOGIN">
	 </form>
      <a href="register.php">EMPLOYEE REGISTRATION</a>
     </div>
  </body>
  </html>