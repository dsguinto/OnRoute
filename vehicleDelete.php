<?php

use ONROUTE\models\{Database, Vehicle};
require_once 'vendor/autoload.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $dbcon = Database::getDb();
    $delete = new Vehicle();
    $deleteData = $delete->deleteVehiclesToRent($id, $dbcon);

    if($deleteData){
        echo "Problem deleting Vehicle Information";
    } else {
        header("Location: vehicleInfo.php");
    }
}
