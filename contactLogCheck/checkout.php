
<html lang= "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="checkout.css">
        <title> Checkout Form</title>
    </head>
    <body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  


  $fullName = test_input($_POST["fullName"]);
  $email = test_input($_POST["email"]);
  $addr = test_input($_POST["address"]);
  $city = test_input($_POST["city"]);
  $state = test_input($_POST["state"]);
  $zip = test_input($_POST["zip"]);

  $phone_number = test_input($_POST["phone_number"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
        <h2> Checkout Form</h2>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="/action_page.php">

                        <div class="row">
                            <div class="col-58">
                                <h3>Billinhg Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" laceholder="John M. Done">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="John@example.com">
            <label for="adr"><i class="fa fa-affress-caed-0"></i> address</Address></label>
            <input type="text" id="adr" name="address" placeholder="452 w. 14th street">
            <label for="city"><i class="fa fa-institution"></i> city</label>
            <input type="text" id="city" name="city" placeholder="Philadelphia">

            <div class="row">
                <div class="col-50">
                    <label for="state">state</label>
                    <input tyoe="text" id="state" name="state" placeholder="PA">
                </div>
                <div class="col-50">
                    <label for="state">zip</label>
                    <input tyoe="text" id="zip" name="zip" placeholder="10000">
                </div>
            </div>
         </div>

         <div class="col-50">
             <h3>Payment</h3>
             <label for="fname">Accepeted card</label>
             <div class= "icon-container">
                 <i class="fa fa-cc-visa" style="color: navy;"></i>
                 <i class="fa fa-cc-amex" style="color: blue;"></i>
                 <i class="fa fa-cc-mastercard" style="color: red;"></i>
                 <i class="fa fa-cc-discover" style="color: orange;"></i>
             </div>
             <label for="cname">Name on the card</label>
             <input type="text" id="cname" name="cardnumber" placeholder="John Done">

             <label for="ccnum">credit card</label>
             <input type="text" id="ccnum" name="cardnumber" placeholder="0000-1111-2222-3333">

             <label for="expmonth">Exp Month</label>
             <input type="text" id="Expmonth" name="expmonth" placeholder="June">

            
             <div class="row">
                 <div class="col-50">
                     <label for="expyear">Exp year</label>
                     <input type="text" id="expyear" name="expyear" placeholder="2023">
                 </div>

                 <div class="col-50">
                    <label for="cvv">cvv</label>
                    <input type="text" id="cvv" name="cvv" placeholder="355">
                </div>
             </div>
         </div>
         </div>
        <label>
        <input type ="checkbox" checked="checked" name="sameadr">Shipping address same as billing</label>
        <input type ="submit" value="continue to check box" class="btn">
                    </form>


              <?php 
                if(isset($_POST['checkout'])) {
                  $mysqli = new mysqli("software-engineering.co", "chipgallagher", "teamf", "eCommerce"); 
                       
                  // Check connection
                  if($mysqli === false){
                    die("ERROR: Could not connect. " . $mysqli->connect_error);
                  }

                  $sql = "INSERT INTO customer_has_purchase (fullName, email, addr, city, state, zip ) VALUES ('$fullName, '$email', '$addr', '$city', '$state', '$zip' '$phone_number')"; 
                  if($mysqli->query($sql) === true){
                    //echo "Records inserted successfully.";
                    } else {
                    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                   }
                  if ($mysqli->query($sql) === TRUE) {
                    $last_id = $mysqli->insert_id;
                  }

                 

            
                  $mysqli->close();
                }
              ?>
                </div>
            </div>

    <div class="col-25">
        <div class="container">
            <h4>Cart<span class="price" style="color: black"><i class="fa fa shipng cart"></i><b>4</b></span></h4>
            <p><a href="#">IPHONE</a><span class="price"> $1500</span></p>
            <p><a href="#">SAMSUNG</a><span class="price"> $500</span></p>
            <p><a href="#">OPPO</a><span class="price"> $600</span></p>
            <p><a href="#">HUAWEI</a><span class="price"> $700</span></p>
            <hr>
            <p>Total <span class="price" style="color: black"><b>$3300</b></span></p>
        </div>
    </div>
</div>
</body>
</html>






             