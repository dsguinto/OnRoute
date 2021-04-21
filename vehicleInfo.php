<?php

use ONROUTE\models\{Database, Vehicle};
require_once 'vendor/autoload.php';
require_once 'library/functions.php';
require_once 'library/vehicles.php';
//Styling and Header View
$css = array('styles/vehicles.css');
require_once 'views/header.php';

$id = $_SESSION['userID'];
$dbcon = Database::getDb();
$vri = new Vehicle();
$rentalsById = $vri->getVehicleRentalByUser($id, $dbcon);

?>

<main>
<?php if(isset($_SESSION['userID'])){?>
    <h2>Vehicle List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Pick Up Location</th>
                <th>Pick Up Date</th>
                <th>Return Date</th>
                <th>Vehicle Make</th>
                <th>Vehicle Model</th>
                <th>Vehicle Image</th>
                <th>Vehicle Price</th>
                <th>Rental Company</th>
                <th>Rental Address</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($rentalsById)){ 
                foreach($rentalsById as $vehicle){ ?>
                    <tr>
                        <td><?= $vehicle->pickuplocation ?></td>
                        <td><?= $vehicle->pickupdate ?></td>
                        <td><?= $vehicle->returndate ?></td>
                        <td><?= $vehicle->vehiclemake ?></td>
                        <td><?= $vehicle->vehiclemodel ?></td>
                        <td><img src="images/vehicles/<?= $vehicle->vehicleimage ?>" height="100"></td>
                        <td>CAD $<?= $vehicle->vehicleprice ?></td>
                        <td><?= $vehicle->rentalcompanyname ?></td>
                        <td><?= $vehicle->rentalcompanyaddress ?></td>
                        <!-- <td>
                            <!--Update--
                            <form action="#" method="post">
                                <input type="hidden" name="id" value="<?= $vehicle->id; ?>"/>
                                <input type="submit" class="button btn btn-primary" name="updateVehicle" value="Update">
                            </form>
                        </td>-->
                        <td>
                            <!--Delete-->
                            <form action="#" method="post">
                                <input type="hidden" name="id" value="<?= $car["id"]; ?>"/>
                                <input type="submit" class="button btn btn-danger" name="deleteCars" value="Delete">
                            </form>
                        </td>
                    </tr>
            <?php }} ?>
        </tbody>
    </table>
<?php } else { header('Location: ./login.php'); } ?>
</main>

<?php
require_once 'views/footer.php';
?>