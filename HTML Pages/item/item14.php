
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<div class="navbar">
  <a href="../homepage/homepage.html">Home</a>
	  <a href="../search/search.html">Search</a>
	  <a href="../categories/categories.html">Categories</a>
	  <a href="../AboutUs/AboutUs.html">About Us</a>
	  <a href="../login/login.html">Login</a>
    <a href="../contact/contact.html">Contact Us</a>
</div>

  <meta charset="utf-8">

  <?php
  $servername = "software-engineering.co";
  $username = "";
  $password = "";
  $dbname = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM eCommerce.itemsforsale WHERE id=14";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
      echo "  <title>" . $row["title"]. " - Team F</title>
      </head>

      <body>

      <div class=\"about-section\">
        <h1>" . $row["title"]. "</h1>
      </div>
      	<center><img src=\"../assets/" . $row["imagepath"]. "\" alt=\"" . $row["title"]. "\" width=\"30%\"></center>
      	<h2 style=\"text-align:center\">\$" . $row["price"]. "</h2>
      	<h3 style=\"text-align:center\">" . $row["description"]. "</h2>
      <h2 style=\"text-align:center\"><a href=\"../category-" . $row["category"]. "/category-" . $row["category"]. ".php\">Return to Category</a></h2>";

  	}
  } else {
  	echo "<title>Item not found - Team F</title>
</head>

<body>

<div class=\"about-section\">
  <h1>Item Not Found</h1>
</div>
	<h2 style=\"text-align:center\">We are sorry, but the product you are looking for can't be found.</h2></br>
<h2 style=\"text-align:center\"><a href=\"../categories/categories.html\">Return to Categories</a></h2>";
  }
  $conn->close();
  ?>



  <style>

  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 5;
  }

  html {
    box-sizing: border-box;
  }

  *, *:before, *:after {
    box-sizing: inherit;
  }

  .column {
    float: left;
    width: 25%;
    margin-bottom: 12px;
    padding: 8px;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
  }

  .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
  }

  .container {
    padding: 0 16px;
  }



  .title {
    color: grey;
  }

  .footer a {
    float: left;
    text-align: center;
    padding: 12px;
    color: white;
    text-decoration: none;
    font-size: 17px;
  }


  .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
  }

  .navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

  </style>

</body>
</html>
