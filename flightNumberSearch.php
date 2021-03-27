<!-- Once a user has booked their flight, they can enter their flight number to see the flight details this does not require a login. It is a quicker way for customers to view their flight details, rather than logging in and checking their bookings-->
<?php
    use OnRoute\models\{Database,FlightsData};
    require_once 'library/functions.php';
    $css = array("styles/flightTracking.css");
    require_once 'views/header.php';

    var_dump($_POST);

    if(isset($_POST['flightTrackSubmit'])){
        /* header('location: flightInfo.php'); */
        //Was there a flight number submitted?
        if($_POST['flightNumber'] == ""){
            echo 'Please enter a flight number';
            return false;
        }
        //When flight number submitted, instantiate db connection, utilize getFlightById
        $FlightDataController = new FlightsData(Database::getDB());
    }

?>
<main>
    <div class = "flightTrack">
        <h2>Track Your Flight</h2>
        <p>Here you can track the latest information on your flight. Just enter your flight number below.</p>
        <form class ="flightTrack__form" action="" method="POST" name = "flightTrack__form">
            <div>
                <label for="flightNumber">Flight Number</label>
                <input type="text" id="flightNumber" name="flightNumber" placeholder="######"/>
            </div>
            <button type="submit" name="flightTrackSubmit" value="submitted">GO!</button>
        </form>
    </div>
</main>
<?php 
    require_once 'views/footer.php';
?>