<?php
include ("connection.php");
error_reporting(0);
$_GET['sn'];
$_GET['un'];
$_GET['ln'];


?>
<html>
    <head>

    </head>
    <body>
    <h2>update details</h2>
<form action="" method="GET">
     
 
     Rollno :<input type="text" name="sno" value="<?php echo $_GET['sn']; ?>"/><br><br>
     Firstname:<input type="text" name="username" value="<?php echo $_GET['un']; ?>" /><br><br>
   
     Lastname:<input type="text" name="lastname" value="<?php echo $_GET['ln']; ?>" /><br><br>

      <input type="submit" name="submit" value="update"/>



 </form>


    </body>
    <?php
if ($_GET['submit'])
{
    $sno=$_GET['sno'];
    $unam=$_GET['username'];
    $lnam=$_GET['lastname'];
    $query="UPDATE student1 SET username = '$unam' ,lastname = '$lnam' WHERE sno='$sno' ";
    $data = mysqli_query($conn,$query);
    
    if($data)
    {
        echo"record updated successfully. <a href='display.php'>check updated list</a>";
    }
    else
    {
        echo" record not updated";
    }

}




    ?>
</html>