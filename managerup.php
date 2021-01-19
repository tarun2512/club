<?php
    $con= new mysqli("localhost","root","","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
    $club_id=$_GET['club_id'];
        $id=$_GET['id'];
        $name=$_GET['name'];
		$dob=$_GET['dob'];
		$position=$_GET['position'];
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
        <tr><td>Name</td><br><td><input type="text" value="<?php echo "$name" ?>" name="na"></td></tr>
			<tr><td>Date of birth</td><td><input type="date" value="<?php echo "$dob" ?>"name="dob"></td></tr>
			<tr><td>Position</td><td><input type="text" value="<?php echo "$position" ?>"name="pos"></td></tr>
      <tr><td>Club Name</td><td><select name="club_id" value="none">
   <option value="none" selected disabled hidden>
   select
    <option value="1">Manchester United</option>
    <option value="2">Byren</option></td></tr>
			<tr><td><input type="submit" name="update" value="update"><a href="manager.php"></a> </td>
			<td>
			    <button><a href="manager.php">Back</a></button></td></tr>
			</table>
	</form>
	</div>
	<?php

	if(isset($_POST['update']))
	{
    $club_id=$_POST['club_id'];
  		$name=$_POST['na'];
		$dob=$_POST['dob'];
		$position=$_POST['pos'];
		$sql = "UPDATE id15403713_manutd.staff SET club_id='$club_id',name='$name', dob='$dob', position='$position' WHERE id='$id'";

if (mysqli_query($con,$sql)) {

  echo '<script>alert("Data Updated Successfully.")</script>';
  echo'<script>location="manager.php"</script>	';
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
