<?php
include "dao.php";
if (isset($_POST['login'])) {
    $login = login($_POST['email'], $_POST['password']);
    if ($login === 0) {
        header('location: login.php');
    } else {
        session_start();
        $_SESSION['email'] = $_POST['email'];
        header('location: home.php');
    }
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
        header('location: home.php');
    } else {
        echo "Registration failed";
    }
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $id = $_POST['id'];
    $users = [
        "id" => $id,
        "username" => $name,
        "email" => $email,
        "password" => $password,
        "address" => $address
    ];
    if (updateUser($users)) {
        header('location: home.php');
    } else {
        echo "Updation failed";
    }
}

if (isset($_GET['user_id'])) {
    try {
        deleteUsers($_GET['user_id']);
        header('location: home.php');
    } catch (Exception $err) {
        echo $err;
    }
}

if (isset($_POST['user_id'])) {
    header("location: edit_form.php?id=" . $_POST['user_id']);
}

function getAllUser()
{
    return getUsers();
}