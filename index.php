<?php

    require_once 'library/functions.php';
    require_once 'views/header.php';
?>

<!-- Content -->
<main>
    <!-- <div class="background"></div> -->
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
        <h2>Explore & Save More, Worry Less!</h2>
        <div class="deals__popular">
            <h3>Popular Destinations</h3>
            <div class="deals__popular_opt">
                <p><a href="#">Cuba (Img?)</a></p>
            </div>
            <div class="deals__popular_opt">
                <p><a href="#">Japan (Img?)</a></p>
            </div>
            <div class="deals__popular_opt">
                <p><a href="#">Paris (Img?)</a></p>
            </div>
            <div class="deals__popular_opt">
                <p><a href="#">New York(Img?)</a></p>
            </div>
        </div>
        <div class="deals__budget">
            <h3>Lowest Prices</h3>
            <div class="deals__budget_opt">
                <p><a href="#">Deal 1 (Img?)</a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="#">Deal 2 (Img?)</a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="#">Deal 3 (Img?)</a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="#">Deal 4 (Img?)</a></p>
            </div>
        </div>
        </div>
    </div>
</main>

<?php
    require_once 'views/footer.php';
?>