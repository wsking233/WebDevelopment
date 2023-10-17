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
            <form action="./member_search.php" method="post">
                <p>
                    <title>Last Name:</title><input type="text" name="user_input">
                </p>
                <p><input type="submit" value="submit"></p>
            </form>
        </div>

        <div>
            <?php
            require_once("../../conf/settings.php");

            $conn = new mysqli($host, $user, $pswd, $dbnm);

            if ($conn->connect_error) {
                die("connect failed: " . $conn->connect_error);
                echo "<p>connect failed!</p>";
            } else {
                echo "<p>database connected: ", $dbnm, "</p>";
            }

            echo "<hr>";
            $sql = "SELECT member_id, fname, lname, email 
            FROM vipmember 
            WHERE lname=\"" . $_POST["user_input"] . "\";";
            $result = mysqli_query($conn, $sql);

            $num_rows = mysqli_num_rows($result);
            echo $num_rows . " result found:";


            echo "<table border = '1'> 
            <tr>
            <th>Member ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            </tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>", $row['member_id'], "</td>";
                echo "<td>", $row['fname'], "</td>";
                echo "<td>", $row['lname'], "</td>";
                echo "<td>", $row['email'], "</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($conn);

            ?>
        </div>
</body>

</html>