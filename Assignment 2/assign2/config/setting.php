<?php
$host = "cmslamp14.aut.ac.nz";
$user = "xwg1585";
$pswd = "";
$dbnm = "xwg1585";
$tablename = "CabsOnline";

$sql_create_table = "CREATE TABLE IF NOT EXISTS ".$tablename."(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    bookingRefNo VARCHAR(20) NOT NULL,
    customerName TEXT NOT NULL,
    phoneNumber INT(12) NOT NULL,
    unitNumber TEXT,
    streetNumber TEXT NOT NULL,
    streetName TEXT NOT NULL,
    suburb TEXT,
    destinationSuburb TEXT,
    pickUpDate DATE NOT NULL,
    pickUpTime TIME NOT NULL,
    status ENUM('assigned','unassigned') NOT NULL);";

$sql_check_table = "SELECT *
    FROM information_schema.TABLES
    WHERE TABLE_NAME = '" . $tablename . "';";

    






