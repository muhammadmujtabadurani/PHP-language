<?php

$serverName = "localhost";
$userName   = "root";
$password   = "";
$dbName   = "mujtaba";


$conn = new mysqli($serverName , $userName , $password , $dbName);

if($conn){
    echo "<br> Connection Succesful!";
}
else{
    echo "<br> Connection failed!";

}


?>