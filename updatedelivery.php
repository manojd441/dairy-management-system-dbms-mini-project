<?php
 include ("connection.php");
 error_reporting(0);
?>


<html>
<head><title>UPDATE DELIVERY DETAILS</title>
<link rel="stylesheet" type="text/css"
	 href="css/add.css">
	
</head>
<body>


	  
	  
<?php


          $a = (int)$_GET['d_id'];
		  $a1 = $_POST['d_id'];
		  $b = $_POST['f_id'];
		  $c = $_POST['m_qty'];
		  $d = $_POST['m_fat']; 
		  $e = $_POST['d_by'];
		  $f = $_POST['d_date'];
		  $g = $_POST['verified_by'];

    $farmer_to_edit = mysqli_query($conn,"SELECT * FROM delivery WHERE d_id =".  stripslashes($a) );
    $row = mysqli_fetch_array($farmer_to_edit);
?>

<header id="main-header">
	  <div class="container">
	  <h1>DAIRY RECORD MANAGEMENT SYSTEM</h1>
	  </div>	
	</header>
	<br>
	<a href="delivery.php" class="button">Back To delivery</a><br>
	
	<div class="box-1">
	<div class="heading-1">
	  <h1>UPDATE DELIVERY DETAILS</h1>
	  </div>
	   
<form class="my-form" method="POST" >



<tr>
<td width="100">delivery id</td>
<td><input name="d_id" type="text" id="d_id" value='<?php echo stripslashes($row['d_id'])?>'></td>
</tr>
<br>

<br>
<tr>
<td width="100">farmer id</td>
<td><input name="f_id" type="text" id="f_id" value='<?php echo stripslashes($row['f_id'])?>'></td>
</tr>
<br>

<br>
<tr>
<td width="100">quantity in lts</td>
<td><input name="m_qty" type="text" id="m_qty" value='<?php echo stripslashes($row['m_qty'])?>'></td>
</tr>
<tr>
<br>

<br>
<tr>
<td width="100">fat in %</td>
<td><input name="m_fat" type="text" id="m_fat" value='<?php echo stripslashes($row['m_fat'])?>'></td>
</tr>
<tr>
<br>

<br>
<tr>
<td width="100">delivered by</td>
<td><input name="d_by" type="text" id="d_by" value='<?php echo stripslashes($row['d_by'])?>'></td>
</tr>
<tr>
<br>

<br>
<tr>
<td width="100">delivery date</td>
<td><input name="d_date" type="date" id="d_date" value='<?php echo stripslashes($row['d_date'])?>'></td>
</tr>
<tr>
<br>

<br>
<tr>
<td width="100">Verified by</td>
<td><input name="verified_by" type="text" id="verified_by" value='<?php echo stripslashes($row['verified_by'])?>' ></td>
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
if(isset($_POST['update']))
{

$sql="update delivery set d_id='$a1',f_id='$b',m_qty='$c',m_fat='$d',d_by='$e',d_date='$f',verified_by='$g' where d_id='$a'";

$ret=mysqli_query($conn,$sql);
if(!$ret)
{
  die('could not update data:');
}
echo "updated successfully\n";
header("refresh:1;url=delivery.php");
}
?>
</body>
</html>