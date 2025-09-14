<?php
include "user_controller.php";
session_start();

if (!isset($_SESSION['email'])) {
    header('location: login.php');
    exit();
}
$email = $_SESSION['email'];
$users = getAllUser();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hii, <?= $email ?></h1>
    <header>
        <a href="registration.php">Register</a>
    </header>
    <br />
    <table border="2px">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        foreach ($users as $user) {
            ?>
            <tr>
                <td><?= $user["id"] ?></td>
                <td><?= $user["name"] ?></td>
                <td><?= $user["email_id"] ?></td>
                <td><?= $user["address"] ?></td>
                <td><a href="user_controller.php?user_id=<?= $user["id"] ?>">Delete</a></td>
                <td>
                    <form action="user_controller.php" method="POST">
                        <input type="hidden" name="user_id" value="<?= $user["id"] ?>" />
                        <button type="submit" name="edit">Edit</button>
                    </form>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>