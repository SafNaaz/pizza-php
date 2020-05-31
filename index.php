<?php

    // MYSQLi and PDO (php data objects)
    //connect to database
    $conn = mysqli_connect('localhost','safnas','Naaz@6581', 'ninja_pizza');

    if(!$conn){
        echo 'Connection error: '.mysqli_connect_error();
    }

    //write query for all pizzas

    $sql = 'SELECT  title,ingredients, id FROM pizzas';

    $result = mysqli_query($conn, $sql);

    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_results($result); //free memory

    mysqli_close($conn);

    print_r($pizzas);

?>

<!DOCTYPE html>
<html lang="en">
<?php include ('templates/header.php') ?>

<?php include ('templates/footer.php') ?>


</html>