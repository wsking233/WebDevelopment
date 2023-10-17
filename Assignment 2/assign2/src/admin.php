<html>
<!--
    Name: William Wang
	Student ID: 18017970
	email:xwg1585@autuni.ac.nz

  this is the php file for admin page, it connect to DB.
  this file get search key words from admin.html, and search it from database,
  then print out in a talbe to show the result.
 -->
<?php


//load setting file
require_once("../config/setting.php");

$conn = new mysqli($host, $user, $pswd, $dbnm);


if ($conn->connect_error) {
    die("connect failed: " . $conn->connect_error);
    echo "<p>connect failed!</p>";
}


//creat table if not exists
$conn->query($sql_create_table);

$today = new DateTime();
$date = $today->format('d-m-Y');
$hour = $today->format('H');
$min = $today->format('m');
$sec = $today->format('s');
$hour -= 2;

header("Content-type:text/html;charset=utf-8");
$search = $_POST["bsearch"];

$sql_select_2hours = "SELECT * FROM CabsOnline 
WHERE pickUpDate = \"" . $date . "\" AND pickUpTime > \"" . $hour . ":" . $min . ":" . $sec . "\"";

$sql_select_search = "SELECT * FROM CabsOnline
WHERE bookingRefNo = '$search' 
or customerName like '%$search%' 
or phoneNumber like '%$search%'";

if (empty($search)) {
    $result = mysqli_query($conn, $sql_select_2hours);
} else {
    $result = mysqli_query($conn, $sql_select_search);
}

echo "<hr>";
printBookingInfor($result);


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
        echo "<td> <button id = \"sbutton\" value=\"".$row['bookingRefNo']."\" onclick=\"assignDriver()\">Assign</button> </td>";
        echo "</tr>";
    }
    echo "</table>";
}

// function assignDriver($bookingRefNo){
//     global $conn;
//     $sql_select_search ="SELECT *
//     FROM CabsOnline
//     WHERE bookingRefNo = '$bookingRefNo'";
//     $sql_update = "UPDATE CabsOnline SET status = 'Assigned' WHERE bookingRefNo = '$bookingRefNo'";
//     if(mysqli_query($conn, $sql_update)){
//         echo "alert('Driver is assigned!')";
//         $result = mysqli_query($conn, $sql_select_search);
//         echo "";
//         printBookingInfor($result);

//     }else{
//         echo mysqli_error($conn);
//     }

// }
?>

</html>