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
  <link rel="shortcut icon" href="https://www.aut.ac.nz/__data/assets/file/0018/747/favicon.ico" />

  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
  <div class="content">

    <!---to create connection with database---->
      <?php
        //load database username and password
        require_once("./config/sqlinfo.inc.php");

        //create database conection
        $conn = new mysqli($host, $user, $pswd, $dbnm);

        //check connection with database, and return inforamtion if not connect
        if ($conn->connect_error) {
          die("connect failed: " . $conn->connect_error);
        }else{
          //check and create table
          mysqli_query($conn, $sql_create_table); 

          $status_code = $_POST['statuscode'];
          $status = $_POST['status'];
          $share = $_POST['share'];
          $date = $_POST["date"];
          $permission = $_POST['permission'];

          $uniqueCode = "/^[S]+[0-9]{4}/";
          if(!preg_match($uniqueCode,$status_code)){
            echo "<script>alert(\" Wrong format! The status code must start with an “S” followed by four digits, like “S0001.\")</script>";
          }
          
  
          $sql_insert = "INSERT INTO " .$tablename. 
          "(status_code,statu,share,date,permission)
          VALUES (\"" . $status_code . "\",
                  \"" . $status . "\", 
                  \"" . $share . "\", 
                  \"" . $date . "\", 
                  \"" . $permission . "\");";
    
          if(mysqli_query($conn,$sql_insert)){
            echo "<script>alert(\" Congratulations! The status has been posted!\")</script>";
          }

        }

      mysqli_close($conn);
      ?>
  <hr>
  <p><a href="http://xwg1585.cmslamp14.aut.ac.nz/assign1/index.html">Return to Home Page</a></p>

  </div>
</body>

</html>