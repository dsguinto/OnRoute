<?php
namespace OnRoute\models;
class FlightsData{

    //DATABASE CONNECTION
    public function __construct($db)
    {
        $this->db = $db;
    }

    //DATABASE METHODS

    //get specific flight by flight number
    public function getFlightById($id)
    {
        $query = "SELECT * FROM Flights WHERE flights.id = :id";

        $request = $this->db->prepare($query);

        //sanitize
        $request->bindParam(':id', $id);

        //execute
        $request->execute();

        //fetch result
        $result = $request->fetch(\PDO::FETCH_OBJ);

        //return object
        return $result;
    }
}
?>