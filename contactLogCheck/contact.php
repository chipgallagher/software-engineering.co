
     

    <!DOCTYPE html>
<html>
    <head>
        <title> Contanct Us</title>
        <meta name="viewport" content="width-device-width,initiao-scale=1.0,maximum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="contact.css">
    </head>
    <body>

        <?php
        $username = $email = $phoneNumber = $textMessage= "NULL";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $email = test_input($_POST["email"]);
        $phoneNumber = test_input($_POST["phoneNumber"]);
        $textMessage = test_input($_POST["textMessage"]);
        
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        ?>
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2> Contact Us</h2>
                    <input type="text" class="field"  placeholder="User name">
                    <input type="email" class="field"  placeholder="Email">
                    <input type="text" class="field"  placeholder="Phone Number">
                    <textarea class="field" placeholder="Text message"></textarea>
                    <button  class="btn"> Send </button>

                    <?php
                    if(isset($_POST['btn'])) {
                      $mysqli = new mysqli("software-engineering.co", "chipgallagher", "teamf", "eCommerce"); 
                      // Check connection
                      if($mysqli === false){
                        die("ERROR: Could not connect. " . $mysqli->connect_error);
                      }
              

                     $sql = "INSERT INTO customer_has_report (id_report, username, email, phoneNumber,textMessage) VALUES ($last_id, '$username', '$email', '$phoneNumber','$textMessage')"; 
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

                </div>

            </div>
        </div> 
    </body>
</html>