<?php

    require_once 'library/functions.php';

    //Add unqiue css files here
    $css = array('styles/accommodations.css');
    require_once('views/header.php');

?>

<!--copied from content.php and modified-->
<!-- Content -->
<main>
    <!-- <div class="background"></div> -->
    <h2>Accommodations</h2>
    <!--FORM TO BE FIXED IN ORDER TO FUNCTION (names, paths, etc.)-->
    <form>
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