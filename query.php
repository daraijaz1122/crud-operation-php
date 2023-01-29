<?php
include("connection.php");
$que = "INSERT INTO student1 VALUES('5','saqib','ashraf')";
$data = mysqli_query($conn,$que);
if($data){
    echo"one ow inserted";
}
else{
    echo"insertion failed";
}

?>