<?php
    use ONROUTE\models\{Database,Trips, Flight};
    require_once 'vendor/autoload.php';
    require_once 'library/functions.php';
    $css = array("styles/myAccount.css");
    require_once 'views/header.php';

    if (isset($_SESSION['userID'])) {
        //Placeholder for now
    } else {
        //Redirects to login page if user is not logged in
        Header('Location: login.php');
    }

    $db = Database::getDb();
    
    //When flight search query is submitted, instantiate db connection, utilize searchInput
    $tripsController = new Trips($db);
    
    //send flight search input to controller 
    $tripIDs = $tripsController->getTripsforUser($_SESSION['userID']);
    // echo $tripIDs->flightbooking_id;


    //Gets flight booking connecting id's (flight, meal, seat, and class)
    $bookedFlightController = new Flight($db);
    $bookedFlightsIDs = $bookedFlightController->getFlightBookingsById($tripIDs->flightbooking_id);

    //Gets flight details
    $flightController = new Flight($db);
    $flights = $flightController->getFlightById($bookedFlightsIDs->flight_id);



?>

<main>
    <div class="page">
        <h2>Welcome <?= $_SESSION['userFirstName'] . " " . $_SESSION['userLastName'] . "!"?></h2>
        <div class="userDetails">
            <h3>Account Information</h3>
            <ul>
                <li>Name: <?= $_SESSION['userFirstName'] . " " . $_SESSION['userLastName'] ?></li>
                <li>Email: <?= $_SESSION['userEmail'] ?></li>
                <li>Phone: <?= $_SESSION['userPhone'] ?></li>
            </ul>
        </div>
        <div class="tripDetails">
            <h3>Your Trips</h3>

            <?php if (isset($flights)){ 
                foreach($flights as $f) { ?>


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
            <tr>
                <td><?=  $f->departureairport; ?></td>
                <td><?=  $f->arrivalairport; ?></td>
                <td><?=  $f->departuredate; ?></td>
                <td><?=  $f->arrivaldate; ?></td>
                <td><?=  $f->airline; ?></td>
        <?php }}
         ?>
        </tbody>
    </table>
        </div>
    </div>
</main>

<?php
require_once 'views/footer.php';
?>