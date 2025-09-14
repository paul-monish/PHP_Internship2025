<?php
include "dao.php";
$user = [];
if (isset($_GET['id'])) {
    $user = getUserById($_GET['id']);
}
print_r($user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management</title>
</head>

<body>
    <form action="user_controller.php" method="POST">
        <input type="text" placeholder="Enter your name" name="name" value='<?= $user['name'] ?>'>
        <input type="email" placeholder="Enter your email" name="email" value='<?= $user['email_id'] ?>'>
        <input type="password" placeholder="Enter your password" name="password" value='<?= $user['password'] ?>'>
        <input type="text" placeholder="Enter your address" name="address" value='<?= $user['address'] ?>'>
        <input type="hidden" name="id" value='<?= $user['id'] ?>'>
        <button type="submit" name="update">Update</button>
    </form>
</body>

</html>