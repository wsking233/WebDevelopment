<!DOCTYPE html>
<!--
	Name: William Wang
	Student ID: 18017970
	email:xwg1585@autuni.ac.nz
-->

<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>COMP721 Web Development</title>

  <!-- icons -->
  <link rel="apple-touch-icon" href="./img/AUTLogo.jpg" />
  <link rel="shortcut icon" href="https://www.aut.ac.nz/__data/assets/file/0018/747/favicon.ico" />

  <!-- Override CSS file - add your own CSS rules -->
  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
  <div class="container">
    <div class="content">
      <div class="main">
        <?php

        //load database username, password and basic sql
        require_once("./config/sqlinfo.inc.php");

        //create database conection
        $conn = new mysqli($host, $user, $pswd, $dbnm);

        //check connection with database, and return inforamtion if not connect
        if ($conn->connect_error) {
          die("connect failed: " . $conn->connect_error);
          echo "<script>alert(\"Error: " . mysqli_error($conn) . "\")</script>";
        }
        $search = $_GET['Search'];
        $sql = "SELECT statu, status_code, share, post_date, permission 
                FROM " . $tablename . " WHERE status_code=" . $search . ";";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
          echo "<p>Status: ", $row['statu'] . "</p>";
          echo "<p>Status Code: ", $row['status_code'] . "</p><br>";
          echo "<p>Share: ", $row['share'] . "</p>";
          echo "<p>Date Posted: " . $row['post_date'] . "</p>";
          echo "<p>Permission: " . $row['permission'] . "</p><br>";
        }

        mysqli_close($conn);

        ?>
        <hr>
        <p><a href="http://xwg1585.cmslamp14.aut.ac.nz/assign1/index.html">Return to Home Page</a></p>

      </div>
    </div>
  </div>
</body>

</html>