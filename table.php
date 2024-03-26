<?php

    include("config/one.php");
    $sql = "select * from users";
    $result = mysqli_query($conn , $sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="containaer">
        <div class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                 <td>". $row['id']. "</td>
                 <td>". $row['name']. "</td>
                 <td>". $row['email']. "</td>
                 <td>". $row['password']. "</td>
                 </tr>";
            }
           ?>
        </div>
    </div>
</body>
</html>