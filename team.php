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
</div>
<table >
   <tr>
    <th>Name</th>
    <th>Nationality</th>
    <th>Date Of Birth</th>
    <th>Height</th>
    <th>Jercy No</th>
    <th>Position</th>
    <th>Best Position</th>
    <th>Appearence</th>
    <th colspan="2" align="center" >Operations</th>
</tr>
    <?php
    $con= new mysqli("localhost","id15403713_website","ks~Qv+r=ik/E24g","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    } 
    $sql = "SELECT name,nationality,dob,height,jersy_no,pos,bpos,apper FROM team";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["nationality"] . "</td><td>" . $row["dob"] . "</td><td>" . $row["height"] . "</td><td>" . $row["jersy_no"] . "</td><td>" . $row["pos"] . "</td><td>" . $row["bpos"] . "</td><td>" . $row["apper"] . "</td><td><a href = 'tup.php?name=$row[name]&nationality=$row[nationality]&dob=$row[dob]&height=$row[height]&jersy_no=$row[jersy_no]&pos=$row[pos]&bpos=$row[bpos]&apper=$row[apper]'><input type='submit' value='Edit' id='editbtn'</a></td><td><a href = 'tdel.php?jersy_no=$row[jersy_no]'><input type='submit' value='Delete' id='deletebtn'</a></td></tr>";
    
    }
} 
else {
    echo " results";
}
    ?>
    </div>
</table>    
<div class="loginbox">
<p><a href="tadd.php"><input type="submit" name="" value="Add Player" ></a>  </p>
</div>
</body>
<style>
    body{
    height: 100vh;
    place-items: center normal;
    display: grid;
}
table
{
 width: 80%;
 position: absolute;
 top: 30%;
 left: 10%;
 box-shadow: -1px 12px 12px -6px rgba(0,0,0,1.5);
}
table,td,th{
    padding: 10px;
    border: 1px solid deepskyblue;
    border-collapse:collapse;
    color: white;
    text-align: center;
}
</style>
</html>