<?php

function getConn() {
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbDatabase = "datahotel";
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbDatabase", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
