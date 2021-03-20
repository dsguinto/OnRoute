<?php

require_once 'library/functions.php';
//Add unqiue css files here
// $css = array('path to css file', 'oath to another css file', etc.);
$css = array('styles/vehiclerentals.css');
require_once 'views/header.php';

?>


<main>
    <h2>Rent A Vehicle</h2>
    <!-- FORM -->
    <img src="images/vehicles/13-pexels-photo-4090350.jpeg" height="600" id="vehicle__image">
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
    <div class="products">
        <h2>Choose Your Vehicle</h2>
        <div class="products__popular">
            <h3>Top Car Deals</h3>
            <div class="products__popular_opt">
                <a href="#">
                    <p>Citreon</p><p>CA $63.00/Day</p>
                    <img src="images/vehicles/2-Citroen.png" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="products__popular_opt">
                <a href="#">
                    <p>Hyundai Santa Fe</p><p>CA $80.00/Day</p>
                    <img src="images/vehicles/3-Hyundai-Santa-Fe.png" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="products__popular_opt">
                <a href="#">
                    <p>Audi Q7</p><p>CA $68.88/Day</p>
                    <img src="images/vehicles/4-Audi-Q7png.png" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="products__popular_opt">
                <a href="#">
                    <p>Tesla Model S</p><p>CA $63.50/Day</p>
                    <img src="images/vehicles/8-Suzuki-Celerio.png" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="products__popular_opt">
                <a href="#">
                    <p>Maserati Levante</p><p>CA $63.00/Day</p>
                    <img src="images/vehicles/6-Mazda-3.png" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="products__popular_opt">
                <a href="#">
                    <p>Audi Q8</p><p>CA $70.00/Day</p>
                    <img src="images/vehicles/7-Bmw-3.png" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="products__popular_opt">
                <a href="#">
                    <p>Maserati Levante</p><p>CA $70.20/Day</p>
                    <img src="images/vehicles/9-Honda-Clarity.png" height="200" alt="Image of a car model">
                </a>
            </div>
            <div class="products__popular_opt">
                <a href="#">
                    <p>Maserati Levante</p><p>CA $57.70/Day</p>
                    <img src="images/vehicles/10-Mitsubishi-Lancer.png" height="200" alt="Image of a car model">
                </a>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'views/footer.php';
?>