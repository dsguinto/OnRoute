<!-- Once a user has booked their flight, they can enter their flight number to see the flight details this does not require a login. It is a quicker way for customers to view their flight details, rather than logging in and checking their bookings-->
<?php
    use OnRoute\models\{Database,Flight};
    require_once 'vendor/autoload.php';
    require_once 'library/functions.php';
    require_once 'models/flight.php';
    require_once 'models/database.php';
    $css = array("styles/flightTracking.css");

    var_dump($_POST);

    //WHEN FORM IS SUBMITTED
    if(isset($_POST['flightSubmit'])){
        /* header('location: flightInfo.php'); */
        //Was there a flight number submitted?
        if($_POST['flightId'] == ""){
            echo 'Please enter a flight number';
            return false;
        }
        $flightId = $_POST['flightId'];
        //instantiate database connection
        $db = Database::getDb();

        //When flight number submitted, instantiate db connection, utilize getFlightById
        $flightController = new Flight($db);

        //send flightnumber to controller 
        $response = $flightController->getFlightById($flightId);

        //response from database 
        var_dump($response);
    }

    require_once 'views/header.php';
?>
<main>
    <div class = "flightTrack">
        <h2>Track Your Flight</h2>
        <p>Here you can track the latest information on your flight. Just enter your flight number below.</p>
        <form class ="flightTrack__form" action="" method="POST" name = "flightTrack__form">
            <div>
                <label for="flightNumber">Flight Number</label>
                <input type="text" id="flightNumber" name="flightId" placeholder="######"/>
            </div>
            <button type="submit" name="flightSubmit" value="submitted">GO!</button>
        </form>
    </div>
</main>
<?php 
    require_once 'views/footer.php';
?>