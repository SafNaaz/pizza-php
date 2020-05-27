<?php

$peopleOne = ['safnas','sut','vava'];
// echo $peopleOne[1];

$peopleTwo = array('safnas','sut','vava');
// echo $peopleTwo[1];

$ages = [20,30,40,50];
//echo $ages; //error
// print_r($ages);

$ages[] = 60;

// print_r($ages);

array_push($ages,70);
// print_r($ages)

echo count($ages)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP file</title>
</head>
<body>
</body>
</html>