<?php
    $con= new mysqli("localhost","id15403713_website","ks~Qv+r=ik/E24g","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
        $id=$_GET['id'];
        $com=$_GET['com'];
		$home=$_GET['home'];
		$away=$_GET['away'];
		$date=$_GET['date'];
		$time=$_GET['time'];
		$sec=$_GET['sec'];
    ?>
<html>
    <head>
        <title> Manchester United </title>
        <link rel="stylesheet" href="team1.css">
    </head>
<body>
    <div class="banner">
        <div class="navbar">
                   <a href="home.html" ><img src="https://cdn.freebiesupply.com/images/thumbs/2x/manchester-united-logo.png" class="logo"></a>
                   <ul>
                   <li><a href="club.php">MAN UTD </a></li>
                   <li><a href="squad.php">SQUAD </a>
                       <div class="down">
                       <ul>
                           <li><a href="squad.php">ATTACK</a></li>
                           <li><a href="mid.php">MIDFILD</a></li>
                           <li><a href="def.php">DEFENCE</a></li>
                           <li><a href="gk.php">GOAL KEEPER</a></li>
                       </ul>
                       </div>
                   </li>
                   <li><a href="team.php">TEAM </a></li>
                   <li><a href="manager.php"> STAFF </a></li>
                   <li><a href="match.php">FIXTURES </a></li>
                   <li><a href="index.html">LOG OUT</a></li>
                   </ul>
           </div>
		  <form action="" method="post" >
		    <table>
		  	<tr><td>Comptation</td><br><td><input type="text" value="<?php echo "$com" ?>" name="com" required></td></tr>
			<tr><td>Home</td><td><input type="text" value="<?php echo "$home" ?>" name="home"required></td></tr>
			<tr><td>Away</td><td><input type="text" value="<?php echo "$away" ?>" name="away"required></td></tr>
			<tr><td>Date</td><td><input type="date" value="<?php echo "$date" ?>" name="date"required></td></tr>
				<tr><td>Time<br>(12 hr)</td><td><input type="text" value="<?php echo "$time" ?>" name="time"required>&nbsp<select id="time" name="sec">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option></td></tr>
			<tr><td><a href="match.php"><input type="submit" name="update"></a></td><td>
			    <button><a href="match.php">Back</a></button></td></tr>
			</table>
	</form>
	</div>
	<?php

	if(isset($_POST['update']))
	{
  		$com=$_POST['com'];
		$home=$_POST['home'];
		$away=$_POST['away'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$sec=$_POST['sec'];
		$sql = "UPDATE id15403713_manutd.fix SET com='$com', home='$home', away='$away', date='$date',time='$time',sec='$sec' WHERE id='$id'";

if (mysqli_query($con,$sql)) {

  echo '<script>alert("Data Updated Successfully.")</script>';
  echo'<script>location="match.php"</script>	';
	}
	else{
	    echo"faild";
	}
	}
?>
	</div>
</body>
<style>
    form{
        width: 10%;
 position: absolute;
 top: 30%;
 left: 40%;
 color: white;
    }
    a:link {
  text-decoration: none;
}
body{
    height: 100vh;
    place-items: center normal;
    display: grid;
}
table
{
 width: 80%;
 position: absolute;
 top: 10%;
 left: 10%;
 box-shadow: -1px 12px 12px -6px rgba(0,0,0,1.5);
}
table,td,th{
    padding: 10px;
    border: 4px solid deepskyblue;
    border-collapse:collapse;
    color: white;
    text-align: center;
}
</style>

</html>
