<?php

include "dbconnect.php";
$user_name = $_REQUEST['insertName'];

$sql = "INSERT INTO micro (user_name) VALUES ($user_name)";

if ($conn->query($sql) === true) {
    echo ("New record created");
} else {
    echo ("Failed to insert a new record");
}

$conn->close();
