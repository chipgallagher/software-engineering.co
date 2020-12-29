


    <?php
    $name = $username = $password = $email= "NULL";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $name = test_input($_POST["name"]);

    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>


        <?php
                      if(isset($_POST['btn'])) {
                        $mysqli = new mysqli("", "", "", "");
                        // Check connection
                        if($mysqli === false){
                          die("ERROR: Could not connect. " . $mysqli->connect_error);
                        }


                       $sql = "INSERT INTO customer(name, username, password,email) VALUES ($name, '$username', '$password', '$phoneNumber','$email')";
                       if($mysqli->query($sql) === true){
                        //echo "Records inserted successfully.";
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                        }

                       if ($mysqli->query($sql) === TRUE){
                        $last_id = $mysqli->insert_id;
                       }
                       $mysqli->close();
                    }
                  ?>
