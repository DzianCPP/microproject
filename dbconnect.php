<?php

include_once "dbCreadentials.php";

$conn = new mysqli($serverName, $userName, $password, $dbName, 3306);

if ($conn->connect_error) {
    echo ("Connection to DB failed: " . $conn->connect_error);
} else {
    echo ("Successful connection!");
}
