<?php
$con= new mysqli("localhost","root","","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
    $apper= "SELECT apper FROM players WHERE player_id=29";
    $result = $con->query($apper);
    if($result)
    {
      echo "1";
    }
?>
