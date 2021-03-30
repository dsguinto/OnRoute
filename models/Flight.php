<?php
namespace OnRoute\models;
class Flight{
    //DATABASE CONNECTION

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    //DATABASE METHODS

    //get specific flight by flight number
    public function getFlightById($flightId)
    {
        $query = "SELECT * FROM Flights WHERE flights.id = :flightId";

        $request = $this->db->prepare($query);

        //sanitize
        $request->bindParam(':flightId', $flightId);

        //execute
        $request->execute();

        //fetch result
        $result = $request->fetch(\PDO::FETCH_OBJ);

        //return object
        return $result;
    }

    public function addFlight($departureairport, $arrivalairport, $departuredate, $arrivaldate, $plane_id)
    {
        $query = "INSERT INTO flights (departureairport, arrivalairport, departuredate, arrivaldate, plane_id) VALUES(:departureairport, :arrivalairport, :departuredate, :arrivaldate, :plane_id)";

        $request = $this->db->prepare($query);

        //sanitize
        $request->bindParam(':departureairport', $departureairport);
        $request->bindParam(':arrivalairport', $arrivalairport);
        $request->bindParam(':departuredate', $departuredate);
        $request->bindParam(':arrivaldate', $arrivaldate);
        $request->bindParam(':plane_id', $plane_id);

        //execute
        $request->execute();

        //fetch result
        $result = $request->fetch(\PDO::FETCH_OBJ);

        //return object
        return $result;
    }

}
?>