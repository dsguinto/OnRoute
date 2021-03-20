
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
        <form class ="flightTrack__form" action="" method="POST" name = "flightTrack__form">
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
         <?php echo "Dynamically Rendered Airline Logo"?>
        <div class = flightInfo_row>
            <ul class = "row_item">
                <h3>Departure</h3>
                <li>Airport: <?php echo "YYZ" ?></li>
                <li>Terminal: <?php echo "2" ?></li>
                <li>Date: <?php echo "May 5, 2020" ?></li>
                <li>Time: <?php echo "21:00" ?></li>
            </ul>
            <div class = "row_item">
            <i class="fas fa-plane fa-3x"></i>
            </div>
            <ul class = "row_item">
                <h3>Arrival</h3>
                <li>Airport: <?php echo "YVR" ?></li>
                <li>Terminal: <?php echo "1" ?></li>
                <li>Date: <?php echo "May 6, 2020" ?></li>
                <li>Time: <?php echo "22:00" ?></li>
            </ul>
        </div>
    </div>
</main>
<script src="library/flightTracking.js"></script>
<?php 
    require_once 'views/footer.php';
?>