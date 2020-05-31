<?php

    // MYSQLi and PDO (php data objects)
    //connect to database
    $conn = mysqli_connect('localhost','safnas','Naaz@6581', 'ninja_pizza');

    if(!$conn){
        echo 'Connection error: '.mysqli_connect_error();
    }
?>
