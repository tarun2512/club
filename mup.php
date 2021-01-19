<?php
    $con= new mysqli("localhost","id15403713_website","ks~Qv+r=ik/E24g","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
    $name=$_GET['name'];
		$nationality=$_GET['nationality'];
		$dob=$_GET['dob'];
		$height=$_GET['height'];
		$jersy_no=$_GET['jersy_no'];
		$pos=$_GET['pos'];
		$bpos=$_GET['bpos'];
		$apper=$_GET['apper'];
		$goal=$_GET['goal'];
		
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
                <li><a href="#">SQUAD </a>
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
		  	
		  	<tr><td>Name</td><br><td><input type="text" value="<?php echo "$name" ?>" name="na"></td></tr>
			<tr><td>Nationality</td><td><input type="text" value="<?php echo "$nationality" ?>" name="nationality"></td></tr>
			<tr><td>Date of birth</td><td><input type="date" value="<?php echo "$dob" ?>"name="dob"></td></tr>
			<tr><td>Height</td><td><input type="number" value="<?php echo "$height" ?>"name="height"></td></tr>
			<tr><td>Jersy no</td><td><input type="number" value="<?php echo "$jersy_no" ?>"name="jersy_no"></td></tr>
			<tr><td>Position</td><td><input type="text" value="<?php echo "$pos" ?>"name="pos"></td></tr>
			<tr><td>Best pos</td><td><input type="text" value="<?php echo "$bpos" ?>"name="bpos"></td></tr>
			<tr><td>Appearances</td><td><input type="number" value="<?php echo "$apper" ?>"name="apper"></td></tr>
			<tr><td>Goals</td><td><input type="number" value="<?php echo "$goal" ?>" name="goal"></td></tr>
			<tr><td><input type="submit" name="update" value="update"><a href="mid.php"></a> </td>
			<td>
			    <button><a href="mid.php">Back</a></button></td></tr>
			</table>
	</form>
	</div>
	<?php
  
	if(isset($_POST['update']))
	{
  		$name=$_POST['na'];
		$nationality=$_POST['nationality'];
		$dob=$_POST['dob'];
		$height=$_POST['height'];
		$jersy_no=$_POST['jersy_no'];
		$pos=$_POST['pos'];
		$bpos=$_POST['bpos'];
		$apper=$_POST['apper'];
		$goal=$_POST['goal'];
  $sql = "UPDATE id15403713_manutd.mid SET name='$name', nationality='$nationality', dob='$dob', height='$height', jersy_no='$jersy_no', pos='$pos', bpos='$bpos', apper='$apper', goal='$goal' WHERE jersy_no='$jersy_no'"; 
  
if (mysqli_query($con,$sql)) {
    
  echo '<script>alert("Data Updated Successfully.")</script>'; 
  echo'<script>location="mid.php"</script>	';
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
 top: 25%;
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
    padding: 7px;
    border: 4px solid deepskyblue;
    border-collapse:collapse;
    color: white;
    text-align: center;
}
</style>

</html>