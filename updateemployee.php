<?php
 include ("connection.php");
 error_reporting(0);
?>


<html>
<head><title>UPDATE EMPLOYEE DETAILS</title>
<link rel="stylesheet" type="text/css"
	 href="css/add.css">
	 
</head>
<body>


	  
	  
<?php
/*if(isset($_POST['update']))
{

$a = $_POST['e_id'];
$b = $_POST['e_name'];
$c = $_POST['e_mail'];
$e = $_POST['e_role'];
$f = $_POST['e_address'];

$sql="update employee set e_id='$a',e_name='$b',e_mail='$c',e_role='$e',e_address='$f' where e_id='$a'";

$ret=mysqli_query($conn,$sql);
if(!$ret)
{
  die('could not update data:');
}
echo "updated successfully\n";
header("refresh:1;url=employee.php");
mysqli_close($conn);
}
else
{*/
    $a = (int) $_GET['e_id'];
	$a1 = $_POST['e_id'];
	$b = $_POST['e_name'];
    $c = $_POST['e_mail'];
    $e = $_POST['e_role'];
    $f = $_POST['e_address'];
 
    
    $farmer_to_edit = mysqli_query($conn,"SELECT * FROM employee WHERE e_id =".  stripslashes($a) );
    $row = mysqli_fetch_array($farmer_to_edit);

?>

<header id="main-header">
	  <div class="container">
	  <h1>DAIRY RECORD MANAGEMENT SYSTEM</h1>
	  </div>	
	</header>
	<br>
	<a href="employee.php" class="button">Back To Employees</a><br>
	<div class="box-1">
	
	<div class="heading-1">
	  <h1>UPDATE EMPLOYEE DETAILS</h1>
	  </div>
	   
<form class="my-form" method="POST" >



<tr>
<td width="100">employee id</td>
<td><input name="e_id" type="text" id="e_id" value='<?php echo stripslashes($row['e_id']) ?>'></td>
</tr>
<br>

<br>
<tr>
<td width="100">employee name</td>
<td><input name="e_name" type="text" id="e_name" value='<?php echo stripslashes($row['e_name']) ?>'></td>
</tr>
<br>

<br>
<tr>
<td width="100">email id</td>
<td><input name="e_mail" type="text" id="e_mail" value='<?php echo stripslashes($row['e_mail']) ?>'></td>
</tr>
<tr>
<br>


<br>
<tr>
<td width="100">role</td>
<td><input name="e_role" type="text" id="e_role" value='<?php echo stripslashes($row['e_role']) ?>'></td>
</tr>
<tr>
<br>

<br>
<tr>
<td width="100">address</td>
<td><input name="e_address" type="text" id="e_address" value='<?php echo stripslashes($row['e_address']) ?>'></td>
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
         $sql="update employee set e_id='$a1',e_name='$b',e_mail='$c',e_role='$e',e_address='$f' where e_id='$a'";
         $ret=mysqli_query($conn,$sql);
      if(!$ret)
      {
         die('could not update data:');
      }
      echo "updated successfully\n";
	  header("refresh:1;url=employee.php");
    }
?>
</body>
</html>