<?php
namespace OnRoute\models;
class Trips{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getFlightBookings($userId)
    {
        $query = "SELECT flightbooking_id FROM Trips WHERE user_id = :userId";

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

    public function getHotelBookings($userId)
    {
        $query = "SELECT hotelbooking_id FROM Trips WHERE user_id  = :userId";

        $request = $this->db->prepare($query);

        //sanitize
        $request->bindParam(':userId', $userId);

        //execute
        $request->execute();

        //fetch result
        $result = $request->fetch(\PDO::FETCH_OBJ);

        //return object
        return $result;
    }

    public function getVehicleRentals($userId)
    {
        $query = "SELECT vehiclerental_id( FROM Flights WHERE user_id = :userId";

        $request = $this->db->prepare($query);

        //sanitize
        $request->bindParam(':userId', $userId);

        //execute
        $request->execute();

        //fetch result
        $result = $request->fetch(\PDO::FETCH_OBJ);

        //return object
        return $result;
    }


}

?>