<?php

class Hotel {
    public function getAllHotels($dbcon){
        $sql = "Select * FROM hotels";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $hotels = $pdostm->fetchAll(\PDO::FETCH_OBJ);//WHY FETCH ASSOC, NOT OBJ?
        return $hotels;
    }

    public function getHotelsByCity($city, $dbcon){
        $sql = "Select * FROM hotels WHERE city = :city";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->bindParam(':city', $city);
        $pdostm->execute();
        $hotels = $pdostm->fetchAll(\PDO::FETCH_ASSOC);//WHY FETCH ASSOC, NOT OBJ?
        return $hotels;

        /*
        $pdostm->bindValue(':program', $program, \PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $s;
        */

    }

    public function getHotelById($dbcon){
        $sql = "Select * FROM hotels Where id='2'";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $hotels = $pdostm->fetchAll(\PDO::FETCH_OBJ);//WHY FETCH ASSOC, NOT OBJ?
        return $hotels;
    }
    
/* connection string
    private static $user ="root";
    private static $pass = "root";
    private static $dsn = "mysql:host=localhost;dbname=onroute";
*/
}