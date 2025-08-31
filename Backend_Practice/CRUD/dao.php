<?php
require "db.php";
function registerUser($users)
{
    global $conn;
    $name = $users["username"];
    $email = $users["email"];
    $password = $users["password"];
    $address = $users["address"];
    // $query = "INSERT INTO users  VALUES(null,'$name','$password','$address','$email')";
    $query = "INSERT INTO users (name,email_id,address,password) VALUES('$name','$email','$address','$password')";

    if ($conn->query($query)) {
        return $conn->insert_id;
    } else {
        return 0;
    }
}


?>