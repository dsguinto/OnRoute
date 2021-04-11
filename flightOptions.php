<?php
    $css = array('styles/flights.css');
    require_once 'library/functions.php';
    require_once './views/header.php';
    
    if (isset($_SESSION['userID'])) {
        //Placeholder for now
    } else {
        //Redirects to flights page if user is not logged in
        Header('Location: flights.php');
    }
?>

<main>
    <div class="otherOptions">
        <h2>Your flight details</h2>

        <div class="otherOptions__opt">
            <a href="flightNumberSearch.php"><img src="images/flights/difa-naufal-airplane-unsplash.jpg" alt="Image of Plane flying"/></a>
        </div>
        <div class="otherOptions__opt">
            <a href="mealSelection.php"><img src="images/flights/meal5.jpeg" alt="Image of on-flight meal from Air France" /></a>
        </div>
        <div class="otherOptions__opt">
            <a href="seatSelection.php"><img src="images/flights/jorge-rosal-planeseat-unsplash.jpg" alt="Image of man taking picture from plane window"/></a>
        </div>
    </div>
</main>


<?php 
    require_once './views/footer.php';
?>