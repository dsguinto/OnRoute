<?php

    require_once 'library/functions.php';
    //Add unqiue css files here
    $css = array('styles/index.css');
    require_once 'views/header.php';
?>

<!-- Content -->
<main>
    <h2>All your vacations needs in one place.</h2>
    <!--FORM TO BE FIXED IN ORDER TO FUNCTION (names, paths, etc.)-->
    <form>
        <nav class="formNav">
            <ul>
                <li class="formNav__link">Flights</li>
                <li class="formNav__link">Accomodations</li>
                <li class="formNav__link">Vehicles</li>
            </ul>
        </nav>
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
                <label>Check In</label>
            <input type=date />
            </div>
            <div class="tripFrom__input">
                <label>Check Out</label>
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
    <div class="banner">
        <h2>Explore, Save, Enjoy</h2>
    </div>
    <div class="deals">
        <div class="deals__popular">
            <h2>Popular Destinations</h2>
            <div class="deals__popular_opt">
                <a href="flights.php"><img src="images/index/benjamin-bindewald-NewYork.jpg" alt="Image of the Statue of Liberty from unsplash.com"/></a>
            </div>
            <div class="deals__popular_opt">
                <a href="flights.php"><img src="images/index/grillot-edouard-Paris.jpg" alt="Image of the Eiffel Tower from unsplash.com" /></a>
            </div>
            <div class="deals__popular_opt">
                <a href="flights.php"><img src="images/index/martijn-baudoin-Japan.jpg" alt="Image of red Japanese gates from unsplash.com"/></a>
            </div>
            <div class="deals__popular_opt">
                <a href="flights.php"><img src="images/index/roman-lopez-Mexico.jpg" alt="Image of a city in Mexico from unsplash.com"/></a>
            </div>
        </div>
    </div>
</main>

<?php
    require_once 'views/footer.php';
?>