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
<table >
   <tr>
    <th>Name</th>
    <th>Nationality</th>
    <th>Date Of Birth</th>
    <th>Height</th>
    <th>Jercy No</th>
    <th>Position</th>

    <th colspan="2" align="center" >Operations</th>
</tr>
    <?php
    $con= new mysqli("localhost","root","","id15403713_manutd");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
    $sql = "SELECT * FROM players WHERE club_id=1";
$result = $con->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["nationality"] . "</td><td>" . $row["dob"] . "</td><td>" . $row["height"] . "</td><td>" . $row["jersy_no"] . "</td><td>" . $row["position"] . "</td><td><a href = 'pupdate.php?club_id=$row[club_id]&player_id=$row[player_id]&name=$row[name]&nationality=$row[nationality]&dob=$row[dob]&height=$row[height]&jersy_no=$row[jersy_no]&position=$row[position]'><input type='submit' value='Edit' id='editbtn'</a></td><td><a href = 'pdelete.php?player_id=$row[player_id]'><input type='submit' value='Delete' id='deletebtn'</a></td></tr>";

    }
}
else {
    echo " results";
}
    ?>
    </div>
</table>
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
