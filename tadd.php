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
		  	
		  	<tr><td>Name</td><br><td><input type="text" name="name" required></td></tr>
			<tr><td>Nationality</td><td><input type="text" name="nationality" required></td></tr>
			<tr><td>Date of birth</td><td><input type="date" name="dob"required></td></tr>
			<tr><td>Height</td><td><input type="number" name="height"required></td></tr>
			<tr><td>Jersy no</td><td><input type="number" name="jersy_no"required></td></tr>
			<tr><td>Position</td><td><input type="text" name="pos"required></td></tr>
			<tr><td>Best pos</td><td><input type="text" name="bpos"required></td></tr>
			<tr><td>Appearances</td><td><input type="number" name="apper"required></td></tr>
			<tr><td><a href="team.php"><input type="submit" name="submit"></a></td><td>
			    <button><a href="team.php">Back</a></button></td></tr>
			</table>
	</form>
	</div>
	<?php
    $con= new mysqli("localhost","id15403713_website","ks~Qv+r=ik/E24g","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    } 
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$nationality=$_POST['nationality'];
		$dob=$_POST['dob'];
		$height=$_POST['height'];
		$jersy_no=$_POST['jersy_no'];
		$pos=$_POST['pos'];
		$bpos=$_POST['bpos'];
		$apper=$_POST['apper'];
		if($name == "")
{
    echo '<script>alert("Please insert Data!")</script>'; 
  echo'<script>location="tadd.php"</script>';
}
else {
		
		$result = "INSERT INTO id15403713_manutd.team (name, nationality, dob, height, jersy_no, pos,bpos, apper) values('$name','$nationality','$dob','$height','$jersy_no','$pos','$bpos','$apper')";
		if ($con->query($result) === TRUE) 
		{
		    echo '<script>alert("Data Added Successfully!")</script>'; 
		    echo'<script>location="team.php"</script>	';
		}
		else
		{
		    echo '<script>alert("could not add data")</script>'; 
			echo'<script>location="tadd.php"</script>';
		}
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