<?php

namespace OnRoute\models;

class Vehicle{

    //function to get all columns in the 'vehicles' table.
    public function getAllVehicles($dbcon){

        $sql = 'SELECT * FROM vehicles';

        $pdo = $dbcon->prepare($sql);
        $pdo->execute();
        $vehicles = $pdo->fetchAll(\PDO::FETCH_OBJ);

        return $vehicles;

    }
    //function to get vehicles in the 'vehicles' table by id.
    public function getVehiclesById($id, $dbcon){

        $sql = 'SELECT * FROM vehicles WHERE id = :id';
        $pdo = $dbcon->prepare($sql);
        $pdo->bindValue(':id', $id);
        $pdo->execute();
        $vehicles = $pdo->fetchAll(\PDO::FETCH_OBJ);

        return $vehicles;

    }
    //function to get rental companies in the 'rentalcompanies' table by id.
    public function getRentalCompanies($id, $dbcon){

        $sql = 'SELECT * FROM rentalcompanies WHERE id = :id';

        $pdo = $dbcon->prepare($sql);
        $pdo->bindValue(':id', $id);
        $pdo->execute();
        $rcompanies = $pdo->fetchAll(\PDO::FETCH_OBJ);

        return $rcompanies;
        
    }
    //function to get specific columns from the 'vehicalrentals' table
    public function SpecificRentals($pulocation, $pudate, $rdate, $dbcon)
    {
        $sql = "SELECT * FROM vehiclerentals vr JOIN vehicles v ON vr.vehicle_id = v.id
        WHERE pickuplocation LIKE '%$pulocation%' AND :pudate <= pickupdate AND :rdate >= returndate";

        $pdo = $dbcon->prepare($sql);
        //$pdo->bindValue(':pulocation', $pulocation);
        $pdo->bindValue(':pudate', $pudate);
        $pdo->bindValue(':rdate', $rdate);
        $pdo->execute();
        $vrentals = $pdo->fetchAll(\PDO::FETCH_OBJ);

        return $vrentals;

    }//Still working on the search feature
}