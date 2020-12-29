<DOCTYPE html>
<html>
    <head>
        <title> LOGIN </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <div><img src="WechatIMG37.png"/>
        </div>
    </head>
    <body>
        

        <form action= "login.php" method="post">
            <h2>LOGIN</h2>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name"><br>

            <label> User Name</label>
            <input type="password" name="pass" placeholder="password"><br>

            <button type="submit"> login</button>

    </form>
            <?php
            if(isset($_POST['submit'])) {
             $mysqli = new mysqli("software-engineering.co", "chipgallagher", "teamf", "eCommerce"); 
            // Check connection
            if($mysqli === false){
                die("ERROR: Could not connect. " . $mysqli->connect_error);
            }

            $sql = "SELECT * from customer where uname = '$uname' AND pass = '$password'" ; 
            if($mysqli->query($sql) === true){
                header("Location: home.html" );
            } else {
                echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
            }

            if ($mysqli->query($sql) === TRUE){
            $last_id = $mysqli->insert_id;
            }

            $mysqli->close();
            }
        ?>
</body>
</html>

