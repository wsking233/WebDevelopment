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

        $sql = "SELECT member_id, fname, lname FROM vipmember";
        $result = mysqli_query($conn, $sql);

        echo "<table border = '1'> 
        <tr>
        <th>Member ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>", $row['member_id'], "</td>";
            echo "<td>", $row['fname'], "</td>";
            echo "<td>", $row['lname'], "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($conn);

        ?>
    </div>

</body>

</html>