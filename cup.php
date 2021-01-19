<?php
    $con= new mysqli("localhost","root","","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
        $id=$_GET['id'];
        $name=$_GET['name'];
		$dob=$_GET['year'];
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
			<tr><td>Year Found</td><td><input type="date" value="<?php echo "$dob" ?>"name="dob"></td></tr>
			<tr><td><input type="submit" name="update" value="update"><a href="club.php"></a> </td>
			<td>
			    <button><a href="club.php">Back</a></button></td></tr>
			</table>
	</form>
	</div>
	<?php

	if(isset($_POST['update']))
	{
  		$name=$_POST['na'];
		$dob=$_POST['dob'];
		$sql = "UPDATE id15403713_manutd.club SET name='$name', year='$dob' WHERE id='$id'";

if (mysqli_query($con,$sql)) {

  echo '<script>alert("Data Updated Successfully.")</script>';
  echo'<script>location="club.php"</script>	';
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
