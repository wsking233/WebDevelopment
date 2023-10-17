<?php


//load setting file
require_once("../config/setting.php");

$conn = new mysqli($host, $user, $pswd, $dbnm);


if ($conn->connect_error) {
    die("connect failed: " . $conn->connect_error);
    echo "<p>connect failed!</p>";
}


$bookingRefNo = $_GET['bookingRefNo'];

$sql_select_search ="SELECT *
FROM CabsOnline
WHERE bookingRefNo = '$bookingRefNo'";

$sql_update = "UPDATE CabsOnline SET status = 'Assigned' WHERE bookingRefNo = '$bookingRefNo'";

echo "<h2>Congratulations! Booking request [".$bookingRefNo."] has been assigned!</h2>";

if(mysqli_query($conn, $sql_update)){
    $result = mysqli_query($conn, $sql_select_search);
    printBookingInfor($result);

}else{
    echo mysqli_error($conn);
}

function printBookingInfor($result)
{
    echo "<table border = '1' id='mytable'> 
    <tr>
    <th>Booking Reference Number</th>
    <th>Customer Name</th>
    <th>Phone</th>
    <th>Pickup Suburb</th>
    <th>Destination Suburb</th>
    <th>Pickup Date and Time</th>
    <th>Status</th>
    <th>Operation</th>
    </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td id=\"bookingRefNo\">", $row['bookingRefNo'], "</td>";
        echo "<td>", $row['customerName'], "</td>";
        echo "<td>", $row['phoneNumber'], "</td>";
        echo "<td>", $row['suburb'], "</td>";
        echo "<td>", $row['destinationSuburb'], "</td>";
        echo "<td>", $row['pickUpDate'], " ", $row['pickUpTime'], "</td>";
        echo "<td id=\"status\">", $row['status'], "</td>";
        echo "<td> <button id = \"sbutton\" onclick=\"assignDriver(".$row['bookingRefNo'].")\">Assign</button> </td>";
        echo "</tr>";
    }
    echo "</table>";

}
?>