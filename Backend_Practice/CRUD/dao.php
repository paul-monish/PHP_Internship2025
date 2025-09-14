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

function login($email, $password)
{
    $conn = get_connection();
    $query = 'SELECT * FROM `users` where email_id=? and password=?';
    $stmt = $conn->prepare($query);
    $enc_password = md5($password);
    $stmt->bind_param("ss", $email, $enc_password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            return 1;
        }
    }
    return 0;
}

function updateUser($users)
{
    $conn = get_connection();
    $name = $users["username"];
    $email = $users["email"];
    $password = md5($users["password"]);
    $address = $users["address"];
    $id = $users["id"];
    $query = "UPDATE users SET name=?,email_id=?,address=?,password=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssi", $name, $email, $address, $password, $id);
    if ($stmt->execute()) {
        return 1;
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

function getUserById($id)
{
    $conn = get_connection();
    $query = "SELECT * FROM users where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            return $row;
        }
    }
    return [];
}



function deleteUsers($id)
{
    try {
        $conn = get_connection();
        $query = "DELETE FROM users where id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    } catch (Exception $err) {
        echo $err;
    }
}


