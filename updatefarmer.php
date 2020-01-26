<?php
 include ("connection.php");
 error_reporting(0);
?>


<html>
<head><title>UPDATE FARMER DETAILS</title>
<link rel="stylesheet" type="text/css"
	 href="css/add.css">
	 
</head>
<body>


	  
	  
<?php
/*
if(isset($_POST['update']))
{

$a=$_POST['f_id'];
$b=$_POST['f_name'];
$c=$_POST['f_address'];
$d=$_POST['f_phone'];
$e=$_POST['f_ac'];

$sql="update farmer set f_id='$a',f_name='$b',f_address='$c',f_phone='$d',f_ac='$e' where f_id='$a'";

$ret=mysqli_query($conn,$sql);
if(!$ret)
{
  die('could not update data:');
}
echo "updated successfully\n";
header("refresh:1;url=farmer.php");
mysqli_close($conn);
}
else
{ */

    $f_id = (int) $_GET['f_id'];
	$b=$_POST['f_name'];
    $c=$_POST['f_address'];
    $d=$_POST['f_phone'];
    $e=$_POST['f_ac'];
 
    
    $farmer_to_edit = mysqli_query($conn,"SELECT * FROM farmer WHERE f_id =".  stripslashes($f_id) );
    $row = mysqli_fetch_array($farmer_to_edit);
?>

<header id="main-header">
	  <div class="container">
	  <h1>DAIRY RECORD MANAGEMENT SYSTEM</h1>
	  </div>	
	</header>
	<br>
	 <a href="farmer.php" class="button">Back To Farmers</a><br>
		<div class="box-1">
	<div class="heading-1">
	  <h1>UPDATE FARMER DETAILS</h1>
	  </div>
	  
<form class="my-form" method="POST" >



<tr>
<td width="100">farmer id</td>
<td><input name="f_id" type="text" id="f_id" value='<?php echo stripslashes($row['f_id']) ?>'></td>
</tr>
<br>

<br>
<tr>
<td width="100">farmer name</td>
<td><input name="f_name" type="text" id="f_name" value='<?php echo stripslashes($row['f_name']) ?>'></td>
</tr>
<br>

<br>
<tr>
<td width="100">address</td>
<td><input name="f_address" type="text" id="f_address" value='<?php echo stripslashes($row['f_address']) ?>'></td>
</tr>
<tr>
<br>

<br>
<tr>
<td width="100">phone no.</td>
<td><input name="f_phone" type="text" id="f_phone" value='<?php echo stripslashes($row['f_phone']) ?>'></td>
</tr>
<tr>
<br>

<br>
<tr>
<td width="100">bank ac no.</td>
<td><input name="f_ac" type="text" id="f_ac" value='<?php echo stripslashes($row['f_ac']) ?>'></td>
</tr>
<tr>
<br>

<br>
<tr>
<td width="100"></td>
<td></td>
</tr>
<td width="100"></td>
<td>
<input name="update" type="submit" id="update" value="UPDATE" class="button">
</td>
</tr>

</form>
</div>
<?php
if (isset($_POST['update'])) 
	{
         $sql="update farmer set f_id='$f_id',f_name='$b',f_address='$c',f_phone='$d',f_ac='$e' where f_id='$f_id'";
         $ret=mysqli_query($conn,$sql);
      if(!$ret)
      {
         die('could not update data:');
      }
      echo "updated successfully\n";
	  header("refresh:1;url=farmer.php");
    }
?>
</body>
</html>