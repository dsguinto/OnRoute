<!-- Once a user has booked their flight, they can enter their flight number to see the flight details this does not require a login. It is a quicker way for customers to view their flight details, rather than logging in and checking their bookings-->
<?php 
    require_once 'library/functions.php';
    $css = array("styles/flightTracking.css");
    require_once 'views/header.php';
?>
<main>
    <!-- Flight track form appears on page load -->
    <div class = "flightTrack">
        <h2>Track Your Flight</h2>
        <p>Here you can track the latest information on your flight. Just enter your flight number below.</p>
        <form action="" method="POST" name = "flightTrack__form">
            <div>
                <label for="flightNumber">Flight Number</label>
                <input type="text" id="flightNumber" name="flightNumber" placeholder="######"/>
            </div>
            <button type="submit" name="flightTrackSubmit">GO!</button>
        </form>
    </div>
    <!-- On form submission, flightInfo displays and flightTrack is set to display:none -->
    <div class = "flightInfo">
        <h2>Flight Information for Flight <?php echo "######" ?></h2>
         <!-- Import airline image from database -->
        <img src="<?php echo "#" ?>">Airline Icon</img>
            <ul class = "flightInfo_departure">
                <li>Airport: <?php echo "#" ?></li>
                <li>Terminal: <?php echo "#" ?></li>
                <li>Date: <?php echo "#" ?></li>
                <li>Time: <?php echo "#" ?></li>
            </ul>
            <div class = "flightInfo_arrow">
                <img src="<?php echo "#" ?>">Insert Arrow</img>
            </div>
            <ul class = "flightInfo_arrival">
                <li>Airport: <?php echo "#" ?></li>
                <li>Terminal: <?php echo "#" ?></li>
                <li>Date: <?php echo "#" ?></li>
                <li>Time: <?php echo "#" ?></li>
            </ul>
    </div>
</main>
<?php 
    require_once 'views/footer.php';
?>
 