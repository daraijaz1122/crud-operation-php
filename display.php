<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM student1";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if($total)
{
?>
     <table>
     <tr class="top">
        <th>sno</th>
        <th>username</th>
        <th>lastname</th>
        <th colspan="2">operations</th>
        </tr><br>

   <style>
    .top{
        border:1px solid black;
    }
    td
    {
        padding:10px;
        border:solid black 1px;
        
    }
    th{
        color:blue;
        font-size: 22px;
        font-style: italic;
    }
    table{
        margin-top: 0px;
        grid-row:auto;
        border-collapse: collapse;
    }
   </style>
   <?php 
    while($result=mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td>".$result['sno']."</td>
        <td>".$result['username']."</td>
        <td>".$result['lastname']."</td>
        <td> <a href='update.php?sn=$result[sno] & un=$result[username] & ln=$result[lastname]'> update </a></td>
        <td><a href='delete.php?sn=$result[sno]' onclick=' return checkdelete()' > delete</a></td>
        
        
    
        </tr> <br>";
    }
   
}
else
{
    echo "no record found";
   // $result['sno']." ".$result['username']." ". $result['lastname']. "<br><br>";
}

?>
</table>
<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete??');
    }
</script>