<?php

require_once 'library/functions.php';
//require_once 'views/header.php'; comment out because I need to call another css file in header. paste header and $headerMenu below.

$headerMenu = [
    'Home' => 'index.php',
    'Flights' => 'flights.php',
    'Accommodations' => 'accommodations.php',
    'Vehicle Rental' => 'vehicles.php',
    'Customer Service' => 'services.php'
];

?>

<!--copied from header.php-->

<!DOCTYPE html>
<html lang="en">
<div class="page">
    <head>
        <meta charset="utf-8" />
        <title>onRoute - Travel Better</title>
        <link type="text/css" rel="stylesheet"  href="styles/global.css" />
        <link type="text/css" rel="stylesheet"  href="styles/accommodations.css" />
        <script src="https://kit.fontawesome.com/2956115494.js" crossorigin="anonymous"></script>
        <script src="library/mainForm.js"></script> 
    </head>
    <body>
        <header>
            <h1><a href="index.php" class="homeLink">onRoute <i class="fas fa-route"></i></a></h1>
        <nav>
            <?php echo displayNavigation($headerMenu); ?>
        </nav>
        </header>


<!--copied from content.php and modified-->
<!-- Content -->
<main>
    <!-- <div class="background"></div> -->
    <h2>Accommodations</h2>
    <!--FORM TO BE FIXED IN ORDER TO FUNCTION (names, paths, etc.)-->
    <form>
        <!--don't need form nav for now
        <nav class="formNav">
            <ul>
                <li class="formNav__link">Flights</li>
                <li class="formNav__link">Accomodations</li>
                <li class="formNav__link">Vehicles</li>
            </ul>
        </nav>-->
        <div class="initialForm">
            <h2>Your Dream Vacation Awaits</h2>
        </div>
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
        <div class="tripFrom">
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
        <div class="tripFrom">
            <div class="tripFrom__input">
                <label>Pick Up Location</label>
                <input type=text />
            </div>
            <div class="tripFrom__input">
                <label>Pick Up Date</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <label>Drop Off Date</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <input class="tripFrom__input_btn" type=button value="Search" />
            </div>
        </div>
    </form>
    <div class="deals">
        <h2>Popular Choices</h2>
        <div class="deals__popular">
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a0001.jpg"><img src="images/accommodations/a0001.jpg" alt="" width="" /></a>
                </p>
            </div>
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a0002.jpg"><img src="images/accommodations/a0002.jpg" alt="" width="" /></a>
                </p>
            </div>
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a0005.jpg"><img src="images/accommodations/a0005.jpg" alt="" width="" /></a>
                </p>
            </div>
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a0006.jpg"><img src="images/accommodations/a0006.jpg" alt="" width="" /></a>
                </p>
            </div>
        </div>
        <h2>Lowest Prices</h2>
        <div class="deals__budget">
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a0003.jpg"><img src="images/accommodations/a0003.jpg" alt="" width="" /></a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a0004.jpg"><img src="images/accommodations/a0004.jpg" alt="" width="" /></a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a0006.jpg"><img src="images/accommodations/a0008.jpg" alt="" width="" /></a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a0006.jpg"><img src="images/accommodations/a0013.jpg" alt="" width="" /></a></p>
            </div>
        </div>
        </div>
    </div>
</main>





<?php
require_once 'views/footer.php';
?>