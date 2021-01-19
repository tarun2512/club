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
          <li><a href="club.php">CLUBS </a>
          <div class="down">
          <ul>
              <li><a href="club1.php">MAN UTD</a></li>
              <li><a href="club2.php">BYREN</a></li>
            </ul>
          </div></li>
          <li><a href="allplayers.php">PLAYERS </a>
              <div class="down">
              <ul>
                  <li><a href="squad.php">ATTACK</a></li>
                  <li><a href="mid.php">MIDFILD</a></li>
                  <li><a href="def.php">DEFENCE</a></li>
                  <li><a href="gk.php">GOAL KEEPER</a></li>
              </ul>
              </div>
          </li>
          <li><a href="manager.php"> STAFF </a></li>
          <li><a href="match.php">FIXTURES </a></li>
          <li><a href="index.html">LOG OUT</a></li>
          </ul></div>
		  <form action="" method="post" >
		    <table>
          <tr><td>Club</td><br><td><input type="number" name="club_id" required></td></tr>
		  	<tr><td>Name</td><br><td><input type="text" name="name" required></td></tr>
			<tr><td>Year Found</td><td><input type="date" name="dob"required></td></tr>
			<tr><td><a href="club.php"><input type="submit" name="submit"></a></td><td>
			    <button><a href="club.php">Back</a></button></td></tr>
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
    $club_id=$_POST['club_id'];
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		if($club_id<0)
{
    echo '<script>alert("Please Enter Valid Data!")</script>';
  echo'<script>location="cadd.php"</script>';
}
else {

		$result = "INSERT INTO id15403713_manutd.club (id,name,year) values('$club_id','$name','$dob')";
		if ($con->query($result) === TRUE)
		{
		    echo '<script>alert("Data Added Successfully!")</script>';
		    echo'<script>location="club.php"</script>	';
		}
		else
		{
		    echo '<script>alert("could not add data")</script>';
			echo'<script>location="cadd.php"</script>';
		}
	}
	}
?>

</body>
<style>
    form{
        width: 30%;
 position: absolute;
 top: 30%;
 left: 35%;
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
