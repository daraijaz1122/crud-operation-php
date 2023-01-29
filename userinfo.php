<?php
include "connection.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<h2>Welcome kidd</h2>
  <form action="" method="GET">
     
 
      Rollno :<input type="text" name="sno"/><br><br>
      Firstname:<input type="text" name="username" /><br><br>
    
      Lastname:<input type="text" name="lastname" /><br><br>

       <input type="submit" name="submit"/>

 
 
  </form>

  <?php
if($_GET['submit']){
  
    $un = $_GET['username'];
    $ln = $_GET['lastname'];
    $sn=$_GET['sno'];

  if($un!="" && $ln!="" && $sn!=""){
    $que = "INSERT INTO student1 VALUES('$sn','$un','$ln')";
    $data = mysqli_query($conn,$que);

    if($data){
        echo "form submitted successfully";
    }
  }
  else{
   
    echo"all fields are neccessary";
}
}







  ?>
    
</body>
</html>