<?php

use OnRoute\models\{Database, Vehicle};
require_once 'vendor/autoload.php';
require_once 'library/functions.php';

require_once 'models/Database.php';
require_once 'models/Vehicle.php';

$css = array('styles/vehicles.css');
require_once 'views/header.php';
 
// var_dump($_POST);

//variables 
$displayVehicles;
$appear = 'style="display: block;';
$disappear = 'style="display: none;"';

//Checking on form submission
if(isset($_POST['vehicleSubmit'])){
    //collect all form input elements and validate
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
    } 
    else {
        //getting the information from the database
        $dbcon = Database::getDb();
        $vr = new Vehicle();
        $vrentals = $vr->SpecificRentals($pickupLoc, $pickupDate, $returnDate, $dbcon);
        //var_dump($vrentals);
        //Sending information outside of parameters
        $displayVehicles = $vrentals;
        //invert the display when user searches for vehicles
        $appear = 'style="display: none';
        $disappear = 'style="display: block;"';
    }
}
//getting the information from the database
$dbcon = Database::getDb();
$vh = new Vehicle();
$vehicles = $vh->getAllVehicles($dbcon);
//var_dump($vehicles);

//sending vehicle data to vehicleSelection.php
$_SESSION['vehicleData'] = $vehicles;

?>

<main>
<?php if(isset($_SESSION['userID'])){?>
    <!--Set for users (not logged in)-->
    <h2>Vehicle List</h2>
    <table>
        <thead>
            <tr>
            <th>Vehicle Id</th>
            <th>Vehicle Make</th>
            <th>Vehicle Model</th>
            <th>Vehicle Image</th>
            <th>Vehicle Price</th>
            <th>Vehicle RC</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($vehicles)){ 
                foreach($vehicles as $vehicle){ ?>
                    <tr>
                        <td><?= $vehicle->id ?></td>
                        <td><?= $vehicle->vehiclemake ?></td>
                        <td><?= $vehicle->vehiclemodel ?></td>
                        <td><img src="images/vehicles/<?= $vehicle->vehicleimage; ?>" height="100" alt="Image of a car model"></td>
                        <td><?= $vehicle->vehicleprice ?></td>
                        <td><?= $vehicle->rentalcompany_id ?></td>
                        <td>UPDATE</td>
                        <td>DELETE</td>
                    </tr>
            <?php }} ?>
        </tbody>
    </table>
<?php }else{ ?>
    <!--Set for users (not logged in)-->
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
        <span id="error-msg"><?= isset($ErrorMsg)? $ErrorMsg: '';?></span>
    </form>
    <!-- Vehicle Rental Products-->
    <div class="products">
        <h2>Choose Your Vehicle</h2>
            <?php echo '<div '.$appear.'"><div class="products__popular"><h3>Top Car Deals</h3>'; 
                foreach($vehicles as $vehicle){ if($vehicle->vehicleprice <= '65.00'){ ?>
                <div class="products__popular_opt">
                    <a href="../onRoute/vehicleSelection.php?id=<?= $vehicle->id ?>" name="send-vehicle"><!-- extra inforamtion (=?= $vehicle->vehiclemodel?>)-->
                        <p><?= $vehicle->vehiclemake.' '.$vehicle->vehiclemodel; ?></p><p>CA $<?= $vehicle->vehicleprice; ?>/Day</p>
                        <img src="images/vehicles/<?= $vehicle->vehicleimage; ?>" height="200" alt="Image of a car model">
                    </a>
                </div>
            <?php }/*xif price deal statement*/}/*xforeach*/echo '</div></div>'?>
            <?php echo '<div '.$appear.'"><div class="products__popular"><h3>Vehicles Listed</h3>'; 
                foreach($vehicles as $vehicle){ ?>
                <div class="products__sytem_opt">
                    <a href="../onRoute/vehicleSelection.php?id=<?= $vehicle->id ?>" name="send-vehicle"><!-- extra inforamtion (=?= $vehicle->vehiclemodel?>)-->
                        <p><?= $vehicle->vehiclemake.' '.$vehicle->vehiclemodel; ?></p><p>CA $<?= $vehicle->vehicleprice; ?>/Day</p>
                        <img src="images/vehicles/<?= $vehicle->vehicleimage; ?>" height="200" alt="Image of a car model">
                    </a>
                </div>
            <?php }/*xforeach*/echo '</div></div>'?>
            <?php echo '<div '.$disappear.'"><div class="products__popular"><h3>Vehicles Searched</h3>'; 
                foreach($displayVehicles as $vehicle){ ?>
                <div class="products__sytem_opt">
                    <a href="../onRoute/vehicleSelection.php?id=<?= $vehicle->id ?>" name="send-vehicle"><!-- extra inforamtion (=?= $vehicle->vehiclemodel?>)-->
                        <p><?= $vehicle->vehiclemake.' '.$vehicle->vehiclemodel; ?></p><p>CA $<?= $vehicle->vehicleprice; ?>/Day</p>
                        <img src="images/vehicles/<?= $vehicle->vehicleimage; ?>" height="200" alt="Image of a car model">
                    </a>
                </div>
            <?php }/*xforeach*/echo '</div></div>'?>
        </div>
    </div>
<?php } ?>
</main>

<?php
require_once 'views/footer.php';
?>