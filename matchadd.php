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
		  	<tr><td>Comptation</td><br><td><input type="text" name="com" required></td></tr>
			<tr><td>Home</td><td><input type="text" name="home"required></td></tr>
			<tr><td>Away</td><td><input type="text" name="away"required></td></tr>
			<tr><td>Date</td><td><input type="date" name="date"required></td></tr>
			<tr><td>Time<br>(12 hr)</td><td><input type="text" name="time"required>&nbsp<select id="time" name="sec">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option></td></tr>
			<tr><td><a href="match.php"><input type="submit" name="submit"></a></td><td>
			<button><a href="match.php">Back</a></button></td></tr>
			</table>
	</form>
	</div>
	<?php
    $con= new mysqli("localhost","root","","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
	if(isset($_POST['submit']))
	{
		$com=$_POST['com'];
		$home=$_POST['home'];
		$away=$_POST['away'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$sec=$_POST['sec'];
		if($com== "")
{
    echo '<script>alert("Please insert Data!")</script>';
  echo'<script>location="matchadd.php"</script>';
}
else {

		$result = "INSERT INTO id15403713_manutd.fix (com, home, away, date ,time,sec) values('$com','$home','$away','$date','$time','$sec')";
		if ($con->query($result) === TRUE)
		{
		    echo '<script>alert("Data Added Successfully!")</script>';
		    echo'<script>location="match.php"</script>	';
		}
		else
		{
		    echo '<script>alert("could not add data")</script>';
			echo'<script>location="matchadd.php"</script>';
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
