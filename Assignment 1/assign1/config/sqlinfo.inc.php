<?php
    $host = "cmslamp14.aut.ac.nz";
    $user = "xwg1585";
    $pswd = "ws@king88888";
    $dbnm = "xwg1585";
    $tablename = "posting";
    $sql_create_table = "CREATE TABLE IF NOT EXISTS posting (
        status_code VARCHAR(4) PRIMARY KEY,
        statu VARCHAR(40) NOT NULL,
        share VARCHAR(40) NOT NULL,
        post_date DATE NOT NULL,
        permission VARCHAR(40));";

    $sql_check_table = "SELECT *
    FROM information_schema.TABLES
    WHERE TABLE_NAME = '".$tablename."';";
?>