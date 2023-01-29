<?php  
$host = "localhost";  
$user = "root";  
$pass = "";  
$dbname = "practice";
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if( $conn )  
{  
 echo "";  
}  
else{
    echo "connection not created";
} 
?>  