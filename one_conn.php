<?php
    include("config/one.php");

    $sql = "insert into users (name , email , password) values('Dexter' , 'dexter@gmail.com' ,'dexter@1234')";
    $result = $conn->query($sql);

    if($result == true){
        echo "<br> your record has been inserted!";
    }
    else{
        echo "<br> no record  inserted!";

    }



?>