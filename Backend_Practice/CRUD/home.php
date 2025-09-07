<?php
include "user_controller.php";
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
    <table border="2px">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Address</th>
        </tr>
        <?php
        foreach ($users as $user) {
            ?>
            <tr>
                <td><?= $user["id"] ?></td>
                <td><?= $user["name"] ?></td>
                <td><?= $user["email_id"] ?></td>
                <td><?= $user["address"] ?></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>