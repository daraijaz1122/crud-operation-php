<?php
include ("connection.php");
error_reporting(0);
$sno=$_GET['sn'];
$query="DELETE FROM student1 where sno='$sno'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo"<font color='green'> Record deleted successfully";
}
else{
    echo"<font color='red'>record deleting failed";
}
?>