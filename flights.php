<?php

require_once 'library/functions.php';

//Add unqiue css files here
$css = array('styles/flights.css');
require_once 'views/header.php';

//flight navigation 
$flightNav = array('Track Flight' => "flightTracking.php", 'In Flight Meal' => "mealSelection.php", 'Seat Selection' => "seatSelection.php" )
?>

<main>
    <h2>Search Flight Options</h2>
    <form  method="POST" action="#">
        <?php echo displayNavigation($flightNav);?>
        <div class="tripFrom">
            <div class="tripFrom__input">
                <label>Leaving From</label>
                <input type=text />
            </div>
            <div class="tripFrom__input">
                <label>Going To</label>
                <input type=text />
            </div>
            <div class="tripFrom__input">
                <label>Departing</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <label>Returning</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <input class="tripFrom__input_btn" type=button value="Search" />
            </div>
        </div>   
    </form>
</main>

<?php
require_once 'views/footer.php';
?>