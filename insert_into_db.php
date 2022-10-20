<?php

$servername = "localhost";
$username = "joe";
$password = "!LoveMyLilBirdy1";
$dbname = "micro";
$user_name = $_REQUEST['insertName'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO micro2 (userName) VALUES ('$user_name')";
    // use exec() because no results are returned
    $conn->query($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
