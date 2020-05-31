<?php

    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);  //prevent XSS attacks
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);

        //check email
        if(empty($_POST['email'])){
            echo 'An email is required <br/>';
        } else{
            echo htmlspecialchars($_POST['email']);
        }

        //check title
        if(empty($_POST['title'])){
            echo 'A title is required <br/>';
        } else{
            echo htmlspecialchars($_POST['title']);
        }

        //check ingredients
        if(empty($_POST['ingredients'])){
            echo 'Atleast one ingredient is required <br/>';
        } else{
            echo htmlspecialchars($_POST['ingredients']);
        }

        

    }


?>

<!DOCTYPE html>
<html lang="en">
<?php include ('templates/header.php') ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email</label>
        <input type="text" name="email">
        <label>Pizza Title</label>
        <input type="text" name="title">
        <label>Ingredients (comma seperated)</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include ('templates/footer.php') ?>


</html>