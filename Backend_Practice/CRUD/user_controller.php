<?php
include "dao.php";
if (isset($_POST['login'])) {
    echo "Login successful";
}
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $users = [
        "username" => $name,
        "email" => $email,
        "password" => $password,
        "address" => $address
    ];
    $insert_id = registerUser($users);
    if ($insert_id > 0) {
        echo "Registration successful, and Id is $insert_id";
    } else {
        echo "Registration failed";
    }
}

function getAllUser()
{
    return getUsers();
}