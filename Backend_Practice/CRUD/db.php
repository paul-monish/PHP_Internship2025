<?php

// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "php_internship_2025";

// $conn = new mysqli($host, $user, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

function get_connection()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "php_internship_2025";
    $conn = new mysqli($host, $user, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>