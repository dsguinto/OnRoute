
<!-- A user can see the meals available and select the meal they want-->
<?php 
     use OnRoute\models\{Database,Flight};
     require_once 'vendor/autoload.php';
     require_once 'library/functions.php';
     require_once 'models/flight.php';
     require_once 'models/database.php';
     
    $css = array("styles/mealSelection.css");
    require_once 'views/header.php';

?>
<main>
    <!-- Flight track form appears on page load -->
    <div class = "mealSelection">
        <form action="" method="POST" name="mealSelection_form">
            <div class = "selections">
                <h2>Please Make a Meal Choice From the Options Below</h2>
                <div class = "selection_row">
                    <p class = mealDescription><strong>Meal 1</strong></br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel. Eget mi proin sed libero enim sed.</p>
                    <div class = "mealImage" style = "background-image: url('images/flights/meal1.jpg')">
                        <input type="radio" id="meal1" name="meal"/>
                    </div>
                </div>
                <div class = "selection_row">
                    <p class = mealDescription><strong>Meal 2</strong></br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel. Eget mi proin sed libero enim sed.</p>
                    <div class = "mealImage" style = "background-image: url('images/flights/meal2.jpg')">
                        <input type="radio" id="meal2" name="meal"/>
                    </div>
                </div>
                <div class = "selection_row">
                    <p class = mealDescription><strong>Meal 3</strong></br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel. Eget mi proin sed libero enim sed.</p>
                    <div class = "mealImage" style = "background-image: url('images/flights/meal3.jpg')">
                        <input type="radio" id="meal3" name="meal"/>
                    </div>
                </div>
                <div class = "selection_row">
                    <p class = mealDescription><strong>Meal 4</strong></br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel. Eget mi proin sed libero enim sed.</p>
                    <div class = "mealImage" style = "background-image: url('images/flights/meal4.jpg')">
                        <input type="radio" id="meal4" name="meal"/>
                    </div>
                </div>
               
                <div class = "selection_row">
                    <button class = "mealSelection_btn" type="submit" name="mealSubmit">Select</button>
                </div>
            </div>
        </form>
    </div>
    <!-- On form submission, mealConfirmation displays and mealSelection is set to display:none -->
    <div class = "mealConfirmation">
        <h2>You have chosen <?php echo "######" ?>. Thank you for your selection!</h2>
         <!-- Import meal image -->
        <img alt="photo of your meal" src="images/flights/meal2.jpg"/>
    </div>
</main>
<script src="library/mealSelection.js"></script>
<?php 
    require_once 'views/footer.php';
?>
