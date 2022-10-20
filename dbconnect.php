<?php

include_once "dbCreadentials.php";

$link = mysqli_init();
$success = mysqli_real_connect($link, $serverName, $userName, $password, $dbName, 8889);
