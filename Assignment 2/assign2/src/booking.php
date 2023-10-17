<!--
    Name: William Wang
	Student ID: 18017970
	email:xwg1585@autuni.ac.nz

  this is the php file for booking page, it connect to DB.
  this file get the infomation that user has typed in, and upload on database.
  then print out the booking schedule.

 -->
<?php


echo "<h1>The Booking information will show up here</h1>";
echo "<hr>";

//load setting file
require_once("../config/setting.php");

//connect to DB
$conn = new mysqli($host, $user, $pswd, $dbnm);

//check connection
if ($conn->connect_error) {
    die("connect failed: " . $conn->connect_error);
    echo "<p>database connect failed!</p>";
}

$sql_insert = "INSERT INTO ".$tablename." (bookingRefNo,customerName,phoneNumber,unitNumber,streetNumber,streetName,suburb,destinationSuburb,pickUpDate,pickUpTime,status)
VALUES (\"" . $referenceNumber . "\" ,
 \"" . $customerName . "\", 
  \"" . $phoneNumber . "\",
   \"" . $unitNumber . "\",
    \"" . $streetNumber . "\",
     \"" . $streetName . "\",
      \"" . $suburb . "\",
       \"" . $destinationSuburb . "\",
        \"" . $pickUpDate_save . "\",
         \"" . $pickUpTime . "\",
          \"" . $status . "\");";

//creat table if not exists
$conn->query($sql_create_table);


//get the max id form database, then add 1 as the new reference number
$sql_check_id = "SELECT MAX(id) from " . $tablename;
$max_id = mysqli_query($conn, $sql_check_id);
echo "max id is:".$max_id;
$new_id = mysqli_fetch_array($max_id);
$code = "BRN";
//make sure the number part is 5 digits, add 0 in front of the id.
$referenceNumber = $code . sprintf("%05d", $new_id[0] + 1); 

if (isset($_POST["data"])) {
    // header("Content-type:text/html;charset=utf-8");

    $json = $_POST["data"];
    $res = json_decode($json);
    $customerName = $res->cname;
    $phoneNumber = $res->phone;
    $unitNumber = $res->unumber;
    $streetNumber = $res->snumber;
    $streetName = $res->stname;
    $suburb = $res->sbname;
    $destinationSuburb = $res->dsbname;
    $pickUpDate = $res->date;
    $pickUpTime = $res->time;
    $status = 'unassigned';

    /*
    *format date and time
    */
    $pickUpDate = date('Y-m-d', strtotime($res->date));
    $pickUpTime = date('H:m:s', strtotime($res->time));

    if (mysqli_query($conn, $sql_insert)) {
        printReferInfor($referenceNumber, $pickUpTime, $pickUpDate);
    } 
} else {
    //if the form not filled, give a alert,then refresh the page.
    echo "alert('Please fill the fomr first!')";
    echo "<script type=\"text/javascript\">location.reload();</script>";
}


//to print out the booking schedule in a table
function printReferInfor($referenceNumber, $pickUpTime, $pickUpDate)
{

    echo "<h2>Thank you for your booking!</h2>";
    echo "<table border = '0'> 
    <tr>
    <th>Booking Reference Number:</th>
    <td>", $referenceNumber, "</td>
    </tr>";
    echo " 
    <tr>
    <th>Pickup Date:</th>
    <td>", $pickUpDate, "</td>
    </tr>";
    echo " 
    <tr>
    <th>Pickup Time:</th>
    <td>", $pickUpTime, "</td>
    </tr>";
}

mysqli_close($conn);
