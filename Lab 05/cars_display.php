<html>

<head>
    <meta http-equiv="content-type" content="text/html" ; charset="utf-8" />
    <title>Using file function</title>
</head>

<body>
    <h1>Web Development - Lab05</h1>
    <?php
    require_once("../../conf/settings.php");

    $conn = new mysqli($host, $user, $pswd, $dbnm);

    if ($conn->connect_error) {
        die("connect failed: " . $conn->connect_error);
        echo "<p>connect failed!</p>";
    } else {
        echo "<p>database connected: ",$dbnm,"</p>";
    }

    echo "<hr>";

    $sql = "SELECT car_id, make, model, price FROM car";
    $result = mysqli_query($conn, $sql);

    echo "<table border = '1'> 
    <tr>
    <th>car_id</th>
    <th>make</th>
    <th>model</th>
    <th>price</th>
    </tr>";
    
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>",$row['car_id'],"</td>";
        echo "<td>",$row['make'],"</td>";
        echo "<td>",$row['model'],"</td>";
        echo "<td align=\"right\">",$row['price'],"</td>";
        echo "</tr>";
        }
    echo "</table>";
   
    mysqli_close($conn);

    ?>
</body>

</html>