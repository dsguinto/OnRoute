<?php
    use OnRoute\models\{Database,Flight};
    require_once 'vendor/autoload.php';
    require_once 'library/functions.php';
    require_once 'models/flight.php';
    require_once 'models/database.php';


    //Add unqiue css files here
    $css = array('styles/flights.css');

    $errMsg = "";
    $hide = "style='display:none;'";

    //WHEN FORM IS SUBMITTED
    if(isset($_POST['searchFlightDB'])){
        /* header('location: flightInfo.php'); */
        //Checks for empty field input
        if(empty($_POST['searchFlight'])){
            $errMsg = 'Please enter an airport code, airline name, location, etc.';
        }

        else{
            //get the search input submitted and store as variable
            $searchInput = $_POST['searchFlight'];

            //instantiate database connection
            $db = Database::getDb();
    
            //When flight search query is submitted, instantiate db connection, utilize searchFlight
            $flightController = new Flight($db);
    
            //send flight search input to controller 
            //searchFlight NOT SANTIZED YET 
            $result = $flightController->searchFlight($searchInput);
    
            if($result == false){
                $errMsg = "No flights found with those search results.";
            } 
            else{
                $hide = "style='display:block;'";
                //start session andstore the $result as a session var
                session_start(); 
                $_SESSION['flightInfo'] = $result;
                //redirect user to the flightInfo pages
                // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); 
            }
        }
    }


    //flight navigation 
    $flightNav = array('Track Flight' => "flightNumberSearch.php", 'In Flight Meal' => "mealSelection.php", 'Seat Selection' => "seatSelection.php" );

    require_once 'views/header.php';
?>
<main>
    <div class="searchDiv">
        <form method="POST" action="">
            <div class="searchDiv__field">
                <label for="searchFlight">Search for a flight: </label>
                <div class="searchDiv__field_bar">
                    <input type="text" name="searchFlight" id="searchFlight" placeholder="Search Flights..." results="0"/>
                    <button type="submit" class="searchBtn" name="searchFlightDB"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="errMsg"><?= $errMsg?></div>
    <table <?= $hide ?> >
    <h3 <?= $hide ?>>Search Results</h3>
        <thead>
            <tr>
                <th>Depature Airport</th>
                <th>Arrival Airport</th>
                <th>Depature Date</th>
                <th>Depature Date</th>
                <th>Airlines</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if (isset($result)){
        foreach($result as $flight) { ?>
            <tr>
                <td><?=  $flight->departureairport; ?></td>
                <td><?=  $flight->arrivalairport; ?></td>
                <td><?=  $flight->departuredate; ?></td>
                <td><?=  $flight->arrivaldate; ?></td>
                <td><?=  $flight->airline; ?></td>
        <?php }}
         ?>
        </tbody>
    </table>
    <form  method="POST" action="#" class="secondSearch">
        <h2>Other Flight Options</h2>
        <?php echo displayNavigation($flightNav);?>
        <div class="tripFrom">
            <div class="tripFrom__input">
                <label>Leaving From</label>
                <input type=text/>
            </div>
            <div class="tripFrom__input">
                <label>Going To</label>
                <input type=text />
            </div>
            <div class="tripFrom__input">
                <label>Departing</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <label>Returning</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <input class="tripFrom__input_btn" type=button value="Search" />
            </div>
        </div>   
    </form>
</main>

<?php
require_once 'views/footer.php';
?>