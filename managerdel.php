<?php
$con= new mysqli("localhost","root","","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
	$id=$_GET['id'];
$query = "DELETE from id15403713_manutd.staff where id = '$id'";
$data = mysqli_query($con,$query);
if($data)
{
echo '<script>alert("Data Deleted Successfully .")</script>';
echo'<script>location="manager.php"</script>';
}
else {
    echo '<script>alert("Could no delete data.")</script>';
  echo'<script>location="manager.php"</script>';
}
 ?>
