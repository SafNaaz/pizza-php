<?php

define('NAME','Safnas');

$name = 'tusee';
$age = 30;
// echo $name;
// define('NAME','TUsee') error

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP file</title>
</head>
<body>
    <h1><?php echo 'hello world'; ?></h1>
    <div><?php echo $name?></div>
    <div><?php echo $age?></div>
    <div><?php echo NAME?></div>

</body>
</html>