<?php

$fruits = ["apple" , "mango", "orange", "pineapple"];
echo "<br> ".$fruits[1];

array_push($fruits , "hello");

// for each //
foreach($fruits as $key){
    echo "<br> $key";
}

// ASSOCIATE ARRAY /
    $Employee = [   
        "Alex" => "Web Dev",
        "Martin" => "App Dev",
        "Henry" => "SQA"
    ];

    foreach($employee as $key => $value){
        echo "<br> $key : $value";
    }

// task 2
for($q=0; $q<=10; $q++){
    for($w=0; $w<=$q; $w++){
        for($e=0 ; $e<=$w ; $e++){
            echo "*";
        }
    }
    echo "<br>";
}

?>