<?php

$products = [
    ['name'=>'bla','price'=>1],
    ['name'=>'ble','price'=>2],
    ['name'=>'blu','price'=>3],
    ['name'=>'bley','price'=>4],
    ['name'=>'blai','price'=>5],
];

foreach($products as $product){
    echo $product['name'].' - '.$product['price'];
    echo '<br/>';
}

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