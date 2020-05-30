<?php

function sayHello($name = 'noname'){
    echo "good day ".$name;
}

// sayHello('safnas');
// sayHello();

function formatProduct($product){
    return "{$product['name']} cost $ {$product['price']}";
}

echo formatProduct(['name' =>'bla', 'price'=>10]);

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