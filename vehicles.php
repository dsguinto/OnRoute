<?php

require_once 'library/functions.php';
//Add unqiue css files here
// $css = array('path to css file', 'oath to another css file', etc.);
$css = array("styles/vehicles.css");
require_once 'views/header.php';

?>


<main>
    <h2>Rent A Vehicle</h2>
    <!-- FORM -->
    <form method="POST" action="#">
        <div class="form__input">
          <label for="puLocation">Pick Up Location</label>
          <input type="text" id="puLocation" placeholder="City, Airport or Address">
          <span></span>
        </div>
        <div class="form__input">
           <label for="puDate">Pick Up Date</label>
           <input type="date" id="puDate">
           <span></span>
        </div>
        <div class="form__input">
            <label for="rDate">Return Date</label>
            <input type="date" id="rDate">
            <span></span>
        </div>
        <div class="form__input">
            <input class="form__submit_btn" id="form__submit_btn" type=button value="Search" />
        </div>
    </form>
    <!-- Car Rental Deals -->
    <div class="deals">
        <h2>Choose Your Vehicle</h2>
        <div class="deals__popular">
            <h3>Top Car Deals</h3>
            <div class="deals__popular_opt">
                <a href="#">
                    <p>Maserati Levante</p><p>CA $63.00/Day - (Company)</p>
                    <img src="images/vehicles/4-Maserati-Levante.jpg" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="deals__popular_opt">
                <a href="#">
                    <p>Audi Q8</p><p>CA $80.00/Day - (Company)</p>
                    <img src="images/vehicles/5-Audi-Q8.jpg" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="deals__popular_opt">
                <a href="#">
                    <p>Maserati Levante</p><p>CA $63.00/Day - (Company)</p>
                    <img src="images/vehicles/4-Maserati-Levante.jpg" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="deals__popular_opt">
                <a href="#">
                    <p>Maserati Levante</p><p>CA $63.00/Day - (Company)</p>
                    <img src="images/vehicles/4-Maserati-Levante.jpg" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="deals__popular_opt">
                <a href="#">
                    <p>Maserati Levante</p><p>CA $63.00/Day - (Company)</p>
                    <img src="images/vehicles/4-Maserati-Levante.jpg" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="deals__popular_opt">
                <a href="#">
                    <p>Audi Q8</p><p>CA $80.00/Day - (Company)</p>
                    <img src="images/vehicles/5-Audi-Q8.jpg" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="deals__popular_opt">
                <a href="#">
                    <p>Maserati Levante</p><p>CA $63.00/Day - (Company)</p>
                    <img src="images/vehicles/4-Maserati-Levante.jpg" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="deals__popular_opt">
                <a href="#">
                    <p>Maserati Levante</p><p>CA $63.00/Day - (Company)</p>
                    <img src="images/vehicles/4-Maserati-Levante.jpg" height="200" alt="Image of a car model">
                </a>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'views/footer.php';
?>