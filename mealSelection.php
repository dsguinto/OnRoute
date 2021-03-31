
<!-- A user can see the meals available and select the meal they want-->
<?php 
     use OnRoute\models\{Database,Flight};
     require_once 'vendor/autoload.php';
     require_once 'library/functions.php';
     require_once 'models/flight.php';
     require_once 'models/database.php';
     
    $css = array("styles/mealSelection.css");
    require_once 'views/header.php';

    // //Checks if $_POST value ex
    // if (empty($_POST)) {
    //     $flightId = $_SESSION['post-data']['id'];
    // }
    // else{
        $flightId = $_POST['id'];
    // }

    //instantiate database connection
    $db = Database::getDb();
    
    //When flight number submitted, instantiate db connection, utilize getFlightById
    $flightController = new Flight($db);

    //send flightId to controller 
    $response = $flightController->getFlightById($flightId);
?>
<main>
    <!-- Flight track form appears on page load -->
    <div class = "mealSelection">
        <div class = "flightSelected">
            <h3>Flight Selected </h3>
            <table>
                <thead>
                    <tr>
                        <th>Depature Airport</th>
                        <th>Arrival Airport</th>
                        <th>Depature Date</th>
                        <th>Depature Date</th>
                        <th>Airlines</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    if (isset($response)){
                ?>
                    <tr>
                        <td><?=  $response->departureairport; ?></td>
                        <td><?=  $response->arrivalairport; ?></td>
                        <td><?=  $response->departuredate; ?></td>
                        <td><?=  $response->arrivaldate; ?></td>
                        <td><?=  $response->airline; ?></td>
                <?php 
                    } 
                ?>
                </tbody>
            </table>
        </div>
        <form class = "mealSelection_form" action="" method="POST" name="mealSelection_form">
            <div class = "mealSelection_flex">
            <h2>Your Flight Includes an In-Flight Meal</h2>
        <p>Please make a selection from the options below.</p>
                <div class = "mealSelection_flex_div">
                    <img alt="meal 1 image" src="images/flights/meal2.jpg"/>
                    <input type="radio" id="meal1" name="meal"/>
                </div>
                <div class = "mealSelection_flex_div"> 
                    <img alt="meal 2 image" src="images/flights/meal4.jpg"/>
                    <input type="radio" id="meal2" name="meal"/>
                </div>
                <div class = "mealSelection_flex_div">
                    <img alt="meal 3 image" src="images/flights/meal1.jpg"/>
                    <input type="radio" id="meal3" name="meal"/>
                </div>
                <div class = "mealSelection_flex_div">
                    <img alt="meal 4 image" src="images/flights/meal3.jpg"/>
                    <input type="radio" id="meal4" name="meal"/>
                </div>
                <div class = "mealSelection_flex_div">
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
