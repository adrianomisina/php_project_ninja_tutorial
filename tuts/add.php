<?php 
   if(isset($_POST['submit'])) {
    // ;
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);

    //check email
    if(empty($_POST['email'])) {
        echo 'An email is required <br />';
    } else {
        echo htmlspecialchars($_POST['email']);
    }

    //check title
    if(empty($_POST['title'])) {
        echo 'An title is required <br />';
    } else {
        echo htmlspecialchars($_POST['title']);
    }

    //check ingredients
    if(empty($_POST['ingredients'])) {
        echo 'At least ingredients is required <br />';
    } else {
        echo htmlspecialchars($_POST['ingredients']);
    }

   }
?>

<!DOCTYPE html>
<html>
	<?php include('templates/header.php')?>

    <section class="container grey-text">
        <h4 class="center red-text">Add a Pizza</h4>
        <form action="add.php" method="POST" class="white" >
            <label for="email" class="red-text text-darken-3">Your Email:</label>
            <input type="text" name='email'>

            <label for="title"  class="red-text text-darken-3">Pizza Title:</label>
            <input type="text" name='title'>

            <label for="ingredients"  class="red-text text-darken-3">Ingredients (comma separated):</label>
            <input type="text" name='ingredients'>

            <div class='center'>
                <input type="submit" value="submit" name='submit' class='btn brand z-depth-0'>
            </div>
        </form>
    </section>

	<?php include('templates/footer.php')?>

	

</html>