<?php


    include("config/one.php");

    $sql = "update users set name = 'Spiderman' where id =2";
    $result = $conn->query($sql);

    if($result == true){
        echo "<br> your record has been updated";
    }










?>