<?php
    use OnRoute\models\{Database,Flight};
    require_once 'vendor/autoload.php';
    require_once 'library/functions.php';
    require_once 'models/flight.php';
    require_once 'models/database.php';
    $css = array("styles/flightBooking.css");
    require_once 'views/header.php';

$hide = "";
$show = "";
    
    //Checks if $_POST value exist
    if (empty($_POST)) {
        $hide = "style='display:none;'";
        $show = "style='display:block;'";
    }
    else{
        $show = "style='display:none;'";
        $flightId = $_POST['flightId'];
  
    //instantiate database connection
    $db = Database::getDb();
    
    //When flight number submitted, instantiate db connection, utilize getFlightById
    $flightController = new Flight($db);

    //send flightId to controller 
    $response = $flightController->getFlightById($flightId);
    }

$hide2 = "";
$confirmationMessage = "";

    if (isset($_POST['confirmFlight'])){

    $finalFlightId = $_POST['flightId'];

    //instantiate database connection
    $db = Database::getDb();
    
    //When flight number submitted, instantiate db connection, utilize getFlightById
    $flightController = new Flight($db);

    $addBooking = $flightController->addFlightBooking($finalFlightId);
    $response = $flightController->getFlightById($finalFlightId);
    $hide2 = "style='display:none;'";
    $confirmationMessage = "<h3>Your flight has successfully been booked! Thank you for choosing OnRoute!</h3>";

    }
?>

<div class = "flightSelected">
    <h2 class="emptyMsg" <?= $show ?>> Looking to book a flight? </br> Click <a href="./flights.php">Here</a></h3> 
    <h2 <?= $hide ?> >Flight Details </h2>
    <div class="flightSelected__details" <?= $hide ?> >
        <ul>
            <?php 
                if (isset($response)){
            ?>
                <li><span class="listTitle">Depature Airport: </span> <?=  $response->departureairport; ?></li>
                <li><span class="listTitle">Arrival Airport:</span><?=  $response->arrivalairport; ?></li>
                <li><span class="listTitle">Depature Date: </span><?=  $response->departuredate; ?></li>
                <li><span class="listTitle">Depature Date: </span><?=  $response->arrivaldate; ?></li>
                <li><span class="listTitle">Airlines:</span> <?=  $response->airline; ?></li>
        </ul>
        <?= $confirmationMessage ?>
        <h3 <?= $hide2 ?>>Please verify the flight details are correct before completing booking confirmation.</h3>
        <div class="flightSelected__details_btns" <?= $hide2 ?>>
            <a href="./flights.php" class="bookBtn">Cancel<a>
            <form action="" method="POST">
                    <input type="hidden" name="flightId" value=" <?= $response->id; ?>"/>
                    <button type="submit" class="bookBtn" name="confirmFlight">Book Flight</button>
            </form>
        </div>
        <?php 
            } 
            ?>
    </div>
</div>

<?php
require_once 'views/footer.php';
?>