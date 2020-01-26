<html>
<body>
<?php
 include ("connection.php");
 error_reporting(0);
$sql="DELETE FROM farmer WHERE f_id='$_GET[f_id]'";
if(mysqli_query($conn,$sql)){
	echo "deleted successfully";
header("refresh:1;url=farmer.php");}
else
echo"not deleted";
?>


</body>
</html>