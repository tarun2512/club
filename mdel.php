<?php
$con= new mysqli("localhost","id15403713_website","ks~Qv+r=ik/E24g","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
	$jersy_no=$_GET['jersy_no'];
$query = "DELETE from id15403713_manutd.mid  where jersy_no = '$jersy_no'";
$data = mysqli_query($con,$query);
if($data)
{
echo '<script>alert("Data Deleted Successfully .")</script>';     
echo'<script>location="mid.php"</script>';
}
else {
    echo '<script>alert("Could no delete data.")</script>'; 
  echo'<script>location="mid.php"</script>';
}
 ?>
