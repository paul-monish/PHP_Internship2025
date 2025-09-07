<?php
require "db.php";
include "helper.php";
// function registerUser($users)
// {
//     global $conn;
//     $name = $users["username"];
//     $email = $users["email"];
//     $password = $users["password"];
//     $address = $users["address"];
//     // $query = "INSERT INTO users  VALUES(null,'$name','$password','$address','$email')";
//     $query = "INSERT INTO users (name,email_id,address,password) VALUES('$name','$email','$address','$password')";

//     if ($conn->query($query)) {
//         return $conn->insert_id;
//     } else {
//         return 0;
//     }
// }


function registerUser($users)
{
    $conn = get_connection();
    $name = $users["username"];
    $email = $users["email"];
    $password = md5($users["password"]);
    $address = $users["address"];
    $query = "INSERT INTO users (name,email_id,address,password) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $name, $email, $address, $password);
    if ($stmt->execute()) {
        return $stmt->insert_id;
    } else {
        return 0;
    }
}

function getUsers()
{
    $conn = get_connection();
    $query = "SELECT * FROM users";
    $result = $conn->query($query);
    $users = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }
    return $users;
}



