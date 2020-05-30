<?php

$name = 'safnas';

function sayHello(){
    global $name;
    $name = 'sut';
    echo "hello $name";
}

sayHello();
echo $name
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