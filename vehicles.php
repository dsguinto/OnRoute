<?php

use OnRoute\models\{Database, Vehicle};
require_once 'vendor/autoload.php';
require_once 'library/functions.php';

require_once 'models/Database.php';
require_once 'models/Vehicle.php';

$css = array('styles/vehicles.css');
require_once 'views/header.php';

/////////////////////////////////////
 
// var_dump($_POST);
session_start();

//Checking on form submission
if(isset($_POST['vehicleSubmit'])){
    //collect all form input elements
    $pickupLoc = $_POST['puLocation'];
    $pickupDate = $_POST['puDate'];
    $returnDate = $_POST['rDate'];

    if(empty($pickupLoc)){
        $ErrorMsg = 'Pick up location must be filled';
    }
    else if(empty($pickupDate)){
        $ErrorMsg = 'Pick up date must be filled';
    }
    else if(empty($returnDate)){
        $ErrorMsg = 'Return date must be filled';
    } else {
        header('Location: vehicles.php');//place '#form' to lead the user back to the form
    }
}

///////////////////////////////////////

//database
$dbcon = Database::getDb();
$vh = new Vehicle();
$vehicles = $vh->getAllVehicles(Database::getDb());
//var_dump($vehicles);

$_SESSION['vehicleData'] = $vehicles;

?>

<main>
    <h2>Rent A Vehicle</h2>
    <!-- FORM -->
    <img src="images/vehicles/13-pexels-photo-4090350.jpeg" height="600" id="vehicle__image">
    <form action="vehicles.php" method="POST" name="form" id="form">
        <div class="form__input">
          <label>Pick Up Location</label>
          <input type="text" name="puLocation" id="puLocation" placeholder="City, Airport or Address" value="<?= isset($pickupLoc)? $pickupLoc: '';?>">
        </div>
        <div class="form__input">
           <label>Pick Up Date</label>
           <input type="date" name="puDate" id="puDate" value="<?= isset($pickupDate)? $pickupDate: '';?>"/>
        </div>
        <div class="form__input">
            <label>Return Date</label>
            <input type="date" name="rDate" id="rDate" value="<?= isset($returnDate)? $returnDate: '';?>"/>
        </div>
        <div class="form__input">
            <input class="form__submit_btn" name="vehicleSubmit" type=submit value="Search"/>
        </div>
        <span style="color:red;"><?= isset($ErrorMsg)? $ErrorMsg: '';?></span>
    </form>
    <!-- Vehicle Rental Products-->
    <div class="products">
        <h2>Choose Your Vehicle</h2>
        <div class="products__popular">
            <?php if(!isset($_POST['vehicleSubmit'])){ echo '<h3>Top Car Deals</h3>'; 
                foreach($vehicles as $vehicle){ if($vehicle->vehicleprice <= '65.00'){ ?>
                <div class="products__popular_opt">
                    <a href="../onRoute/vehicleSelection.php?id=<?= $vehicle->id ?>" name="send-vehicle"><!-- extra inforamtion (=?= $vehicle->vehiclemodel?>)-->
                        <p><?= $vehicle->vehiclemake.' '.$vehicle->vehiclemodel; ?></p><p>CA $<?= $vehicle->vehicleprice; ?>/Day</p>
                        <img src="images/vehicles/<?= $vehicle->vehicleimage; ?>" height="200" alt="Image of a car model">
                    </a>
                </div>
            <?php }/*xif submit statement*/}/*xforeach*/}/*xif statement*/ ?>
            <?php if(!isset($_POST['vehicleSubmit'])){ echo '<h3>Vehicles Listed</h3>'; foreach($vehicles as $vehicle){ ?>
                <div class="products__sytem_opt">
                    <a href="../onRoute/vehicleSelection.php?id=<?= $vehicle->id ?>" name="send-vehicle"><!-- extra inforamtion (=?= $vehicle->vehiclemodel?>)-->
                        <p><?= $vehicle->vehiclemake.' '.$vehicle->vehiclemodel; ?></p><p>CA $<?= $vehicle->vehicleprice; ?>/Day</p>
                        <img src="images/vehicles/<?= $vehicle->vehicleimage; ?>" height="200" alt="Image of a car model">
                    </a>
                </div>
            <?php }/*xforeach*/}/*xif statement*/ ?>
            <?php if(isset($_POST['vehicleSubmit'])){ echo '<h3>Selected Cars</h3>'; foreach($vehicles as $vehicle){ ?>
                <div class="products__sytem_opt">
                    <a href="../onRoute/vehicleSelection.php?id=<?= $vehicle->id ?>" name="send-vehicle"><!-- extra inforamtion (=?= $vehicle->vehiclemodel?>)-->
                        <p><?= $vehicle->vehiclemake.' '.$vehicle->vehiclemodel; ?></p><p>CA $<?= $vehicle->vehicleprice; ?>/Day</p>
                        <img src="images/vehicles/<?= $vehicle->vehicleimage; ?>" height="200" alt="Image of a car model">
                    </a>
                </div>
            <?php }/*xforeach*/}/*xif statement*/ ?>
        </div>
    </div>
</main>

<?php
require_once 'views/footer.php';
?>