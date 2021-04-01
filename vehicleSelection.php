<?php

use OnRoute\models\{Database, Vehicle};
require_once 'vendor/autoload.php';
require_once 'library/functions.php';

require_once 'models/Database.php';
require_once 'models/Vehicle.php';

$css = array('styles/vehicles.css');
require_once 'views/header.php';

session_start();

//vehicle data sent from vehicles.php
if(isset($_SESSION['vehicleData'])){
    //vehicle data picked by id
    $id = $_GET['id'];
    //getting the information from the database
    $dbcon = Database::getDb();
    $vh = new Vehicle();
    $vehicles = $vh->getVehiclesById($id, $dbcon);

    foreach($vehicles as $vehicleInfo){
        //putting the rental compnay id into a variable
        $rcid = $vehicleInfo->rentalcompany_id;
        //getting the information from the database
        $dbcon = Database::getDb();
        $rc = new Vehicle();
        $rcompanies = $rc->getRentalCompanies($rcid, $dbcon);

    }
    //var_dump($vehicles);
}

?>

<main>
    <?php foreach($vehicles as $vehicle){ ?>
    <h2><?= $vehicle->vehiclemake. ' ' .$vehicle->vehiclemodel ?></h2>
    <!-- SELECTED -->
    <a href="vehicles.php" id="return-button">Go Back</a>
    <div class="selected">
        <img src="images/vehicles/<?= $vehicle->vehicleimage; ?>" height="250" alt="">
        <div>
            <?php foreach($rcompanies as $rcompany){ ?>
                <p>Rental Company: <span class="text-span"><?= $rcompany->rentalcompanyname ?></span></p>
                <p>Company Address: <span class="text-span"><?= $rcompany->rentalcompanyaddress ?></span></p>
            <?php } ?>
            <p>Price: <span class="text-span">CA $<?= $vehicle->vehicleprice; ?>/Day</span></p>
        </div>
    </div>
    <?php } ?>
</main>

<?php
require_once 'views/footer.php';
?>