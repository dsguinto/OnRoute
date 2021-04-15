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
    public function SpecificCity($vehiclecity, $dbcon)
    {
        $sql = "SELECT * FROM vehicles WHERE vehiclecity LIKE '%$vehiclecity%'";

        $pdo = $dbcon->prepare($sql);
        $pdo->execute();
        $vrentals = $pdo->fetchAll(\PDO::FETCH_OBJ);

        return $vrentals;

    }//Still working on the search feature

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getVehicleRentalByUser($userId){
        $query = "SELECT * FROM vehicles LEFT JOIN vehiclerentals ON vehicles.id = vehiclerentals.vehicle_id LEFT JOIN rentalcompanies ON rentalcompanies.id = vehicles.rentalcompany_id Where user_id = :userId";

        $request = $this->db->prepare($query);

        //sanitize
        $request->bindParam(':userId', $userId);
        
        //execute
        $request->execute();

        //fetch result
        $result = $request->fetchAll(\PDO::FETCH_OBJ);

        //return object
        return $result;
    }


}