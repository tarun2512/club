<?php
   $email = $_POST['email'];
   $password =$_POST['pass'];

    $con = new mysqli("localhost","id15403713_website","ks~Qv+r=ik/E24g","id15403713_manutd");
    if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    } else{
        $stmt = $con->prepare("select * from registered where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['pass']===$password)
            {
                echo'<script>location="home.html"</script>	';
            }
            else{echo"<h2>invalid email or passwor</h2>";}
            
        }else {
            echo "<h2>Invalid Email or password</h2>";
        }
    }
?>