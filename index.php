<?php

//multi dimensional arrays

// $blogs = [
//     ['mario party','mario','lorem',30],
//     ['mario kart cheats','toad','lorem',25]
// ];


//print_r($blogs)
//print_r($blogs[1])
// print_r($blogs[1][1]) //value

$blogs = [
    ['title' => 'mario party','author'=>'mario','content'=>'lorem','likes'=> 30],
    ['title' => 'mario kart cheats','author'=>'toad','content'=>'lorem','likes'=> 25]
];

//echo $blogs[1]['author']

$popped = array_pop($blogs);
print_r($popped)





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