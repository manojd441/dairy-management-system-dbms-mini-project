<html>
<body>
<?php
 include ("connection.php");
 error_reporting(0);
$sql="DELETE FROM employee WHERE e_id='$_GET[e_id]'";
if(mysqli_query($conn,$sql))
{	
echo "deleted successfully";
header("refresh:1;url=employee.php");
}
else
echo "not deleted";
?>


</body>
</html>