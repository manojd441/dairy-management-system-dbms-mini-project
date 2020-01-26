<html>
<body>
<?php
 include ("connection.php");
 error_reporting(0);
$sql="DELETE FROM delivery WHERE d_id='$_GET[d_id]'";
if(mysqli_query($conn,$sql)){
	echo "Deleted successfully";
header("refresh:1;url=delivery.php");}
else
echo"not deleted";
?>


</body>
</html>