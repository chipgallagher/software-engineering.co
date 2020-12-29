<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<div class="navbar">
	<a href="../homepage/homepage.html">Home</a>
	  <a href="../search/search.php">Search</a>
	  <a href="../categories/categories.html">Categories</a>
	  <a href="../AboutUs/AboutUs.html">About Us</a>
	  <a href="../login/login.html">Login</a>
    <a href="../contact/contact.html">Contact Us</a>
</div>

  <meta charset="utf-8">
  <title>Search - Team F</title>
</head>

<body>

<div class="about-section">
  <h1>Search</h1>
</div>
<center>
  <br>
        <form action="" method="post">
            Enter your search phrase:
            <input type=text name="t1"><input type=submit name="s">
            <br>
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


if(isset($_POST['s'])) // here isset function is using to check where a variable is set or not
{
    $a=$_POST['t1'];// accessing value from first text field
    $sql = "SELECT * FROM eCommerce.itemsforsale WHERE title REGEXP \"$a\"";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo"<div class=\"column\">
<a href=\"../item/item" . $row["id"]. ".php\">
      <div class=\"card\">
        <img src=\"../assets/" . $row["imagepath"]. "\" alt=\"" . $row["title"]. "\" style=\"width:100%\">
        <div class=\"container\">
          <h2 style=\"text-align:center\">" . $row["title"]. "</h2>
          <p>" . $row["description"]. "</p></br>
        </div>
      </div>
      </a>
    </div>";
      }
    } else {
      echo "0 results found";
    }

}
$conn->close();
            ?>
        </form>
</center>
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
        font-size: 18px;
      }

        </style>

      </body>
      </html>
