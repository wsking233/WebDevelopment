<html>

<head>
    <meta http-equiv="content-type" content="text/html" ; charset="utf-8" />
    <title>VIP Member Registration system</title>
</head>

<body>
    <h1>Web Development - Lab05</h1>
    <hr>
    <p><a href="./member_add_form.php">Add New Member Form</a></p>
    <p><a href="./member_display.php">Display All Members Page</a></p>
    <p><a href="./member_search.php">Search Member Page</a></p>
    <hr>
    <div>
        <?php
        require_once("./conf/settings.php");

        $conn = new mysqli($host, $user, $pswd, $dbnm);

        if ($conn->connect_error) {
            die("connect failed: " . $conn->connect_error);
            echo "<p>connect failed!</p>";
        } else {
            echo "<p>database connected: ", $dbnm, "</p>";
        }

        echo "<hr>";
        
        $table = "vipmember";
        //sql for create vipmember table
        $sql_create_table = "CREATE TABLE ".$table."(
            member_id INT AUTO_INCREMENT PRIMARY KEY,
            fname VARCHAR(40),
            lname VARCHAR(40),
            gender VARCHAR(1),
            email VARCHAR(40),
            phone VARCHAR(20));";

        //sql for insert new data
        $sql_insert = "INSERT INTO ".$table." (fname,lname,gender,email,phone)
        VALUES (\"".$_POST["fname"]."\", \"".$_POST["lname"]."\", \"".$_POST["sex"]."\", \"".$_POST["email"]."\", \"".$_POST["phone"]."\");";
        
        $sql_check_table = "SHOW TABLES LIKE 'vipmember'";
        //check the table exists, and creat a new table if it's not exists
        if(mysqli_query($conn,$sql_check_table)){
            echo "Table exists<br>";
        }else{
            if(mysqli_query($conn, $sql_create_table)){
                echo "Table is created: vipmember<br>";
            }else{
                echo "Table is not created: vipmember<br>";
            }
        }

        if(mysqli_query($conn,$sql_insert)){
            echo "new member is added!<br>";
        }else{
            echo "Error: " .$sql_insert. "<br>".mysqli_error($conn)."<br>"; 
        }

        mysqli_close($conn);
        ?>
    </div>



</body>

</html>