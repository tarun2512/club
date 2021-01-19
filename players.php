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
      </ul>
</div>
</div>
		  <form action="" method="post" >
		    <table>

		  	<tr><td>Name</td><br><td><input type="text" name="name" required></td></tr>
			<tr><td>Nationality</td><td><input type="text" name="nationality" required></td></tr>
			<tr><td>Date of birth</td><td><input type="date" name="dob"required></td></tr>
			<tr><td>Height</td><td><input type="number" name="height" required></td></tr>
			<tr><td>Jersy no</td><td><input type="number" name="jersy_no"required></td></tr>
			<tr><td>Position</td><td><select name="bpos" value="none">
   <option value="none" selected disabled hidden>
   select
       <optgroup label="Forward">
         <option value="CF">CF</option>
         <option value="LWF">LWF</option>
         <option value="RWF">RWF</option>
      <optgroup label="Midfielder">
        <option value="AMF">AMF</option>
        <option value="CMF">CMF</option>
        <option value="DMF">DMF</option>
      <optgroup label="Defender">
        <option value="CB">CB</option>
        <option value="LB">LB</option>
        <option value="RB">RB</option>
      <optgroup label="Goal Keeper">
        <option value="GK">GK</option>
</select></td></tr>
			<tr><td>Club</td><td><select name="club_id" value="none">
   <option value="none" selected disabled hidden>
   select
    <option value="1">Manchester United</option>
    <option value="2">Byren</option>
  </select></td>
</td></tr>

</tr>
			<tr><td><a href="allplayers.php"><input type="submit" name="submit"></a></td><td>
			    <button><a href="squad.php">Back</a></button></td></tr>
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
		$nationality=$_POST['nationality'];
		$dob=$_POST['dob'];
		$height=$_POST['height'];
		$jersy_no=$_POST['jersy_no'];
		$bpos=$_POST['bpos'];
    if($height<0)
    {
      echo '<script>alert("Neative Height Not Allowed!")</script>';
    echo'<script>location="player.php"</script>';
    }
    if($jersy_no<0)
    {
      echo '<script>alert("Neative Jersy_no Not Allowed!")</script>';
    echo'<script>location="player.php"</script>';
    }
    if ($bpos=="CF" || $bpos=="LWF"||$bpos=="RWF") {
      $pos="Forward";
    }
    if ($bpos=="AMF" || $bpos=="CMF"||$bpos=="DMF") {
      $pos="Midfielder";
    }
    if ($bpos=="CB" || $bpos=="LB"||$bpos=="RB") {
      $pos="Defender";
    }
    if ($bpos=="GK") {
      $pos="Goal Keeper";
    }

		if($name == "")
{
    echo '<script>alert("Please insert Data!")</script>';
  echo'<script>location="player.php"</script>';
}
else {

		$result = "INSERT INTO id15403713_manutd.players (club_id,name, nationality, dob, height, jersy_no, position,bpos) values('$club_id','$name','$nationality','$dob','$height','$jersy_no','$pos','$bpos')";
		if ($con->query($result) === TRUE)
		{

		    echo '<script>alert("Data Added Successfully!")</script>';
		    echo'<script>location="allplayers.php"</script>	';
		}
		else
		{
		    echo '<script>alert("could not add data")</script>';
			echo'<script>location="players.php"</script>';
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
