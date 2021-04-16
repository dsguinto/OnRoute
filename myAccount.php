<?php
    use ONROUTE\models\{Database, Flight, Hotel, Vehicle};
    require_once 'vendor/autoload.php';
    require_once 'library/functions.php';
    $css = array("styles/myAccount.css");
    require_once 'views/header.php';

    //Checks if user is logged in
    if (empty($_SESSION['userID'])) {
        //Redirects to login page if user is not logged in
        Header('Location: login.php');
    }

    //Checks dates
    $pastDate = "";
    $dateNow = new DateTime("NOW", new DateTimeZone('America/Toronto'));
    $date = date_format($dateNow, 'Y-m-d,  H:i:s');

    //Instantiate database
    $db = Database::getDb();

    //Gets flight details
    $flightController = new Flight($db);
    $flights = $flightController->getFlightBookingByUser($_SESSION['userID']);

    //Get hotel details
    $hotelController = new Hotel($db);
    $hotels = $hotelController->getHotelBookingByUser($_SESSION['userID']);

    // //Get vehicle details
    $vehicleController = new Vehicle($db);
    $vehicles = $vehicleController->getVehicleRentalByUser($_SESSION['userID']);

?>


<main>
    <div class="page">
        <h2>Welcome <?= $_SESSION['userFirstName'] . " " . $_SESSION['userLastName'] . "!"?></h2>
        <div class="userDetails">
            <h3>Account Information</h3>
            <ul>
                <li>Name: <?= $_SESSION['userFirstName'] . " " . $_SESSION['userLastName'] ?></li>
                <li>Email: <?= $_SESSION['userEmail'] ?></li>
                <li>Phone: <?= $_SESSION['userPhone'] ?></li>
            </ul>
        </div>
        <div class="tripDetails">
            <h3>Your Flights</h3>
            <?php if (empty($flights)){
                echo '<h3> You have no flights booked. </h3>';
            } else{ ?>
            <div class="tableWrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Depature Airport</th>
                            <th>Arrival Airport</th>
                            <th>Depature Date</th>
                            <th>Arrival Date</th>
                            <th>Airlines</th>
                            <th>Plane</th>
                            <th>Meal</th>
                            <th>Seat</th>
                            <th>Class</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($flights)){ 
                    foreach($flights as $f) { ?>
                        <tr>
                            <td><?=  $f->departureairport; ?></td>
                            <td><?=  $f->arrivalairport; ?></td>
                            <td><?=  $f->departuredate; ?></td>
                            <td><?=  $f->arrivaldate; ?></td>
                            <td><?=  $f->airline; ?></td>
                            <td><?=  $f->model; ?></td>
                            <td>
                                <?php   
                                if (empty($f->meal)){
                                    if ($f->departuredate < $date){
                                        echo "<p class='unavailable'>Unavailable</p>";
                                    } else{
                                        echo "<form action='./mealSelection.php' method='post'>
                                                <input type='hidden' name='flightBookingID' value='" . $f->id . "' />
                                                <input class='addBtn' type='submit' name='postFlightBookingID' value='Add Meal' />
                                            </form>";
                                    }
                                } else{
                                    echo $f->meal;
                                }
                                ?>
                            </td>
                            <td>
                                <?php   
                                if (empty($f->seat)){
                                    if ($f->departuredate < $date){
                                        echo "<p class='unavailable'>Unavailable</p>";
                                    } else{
                                    echo "<form action='./seatSelection.php' method='post'>
                                            <input type='hidden' name='flightBookingID' value='" . $f->id . "' />
                                            <input class='addBtn' type='submit' name='postFlightBookingID' value='Select Seat' />
                                        </form>";
                                    }
                                } else{
                                    echo $f->seat;
                                }
                                ?>
                            </td>
                            <td>
                                <?php   
                                if (empty($f->class)){
                                    if ($f->departuredate < $date){
                                        echo "<p class='unavailable'>Unavailable</p>";
                                    } else{
                                    echo "<form action='./classSelection.php' method='post'>
                                            <input type='hidden' name='flightBookingID' value='" . $f->id . "' />
                                            <input class='addBtn' type='submit' name='postFlightBookingID' value='Select Class' />
                                        </form>";
                                    }
                                } else{
                                    echo $f->class;
                                }
                                ?>
                            </td>
                            <td>
                            <?php   
                                if ($f->departuredate < $date){
                                    echo "<p class='unavailable'>Completed</p>";
                                } else{
                                echo "<form action='./deleteFlightBooking.php' method='POST'>
                                            <input type='hidden' name='flightBookingId' value='$f->id'/>
                                            <input type='submit' class='deleteBtn' name='cancelFlightBooking' value='Cancel'/>
                                    </form>";
                                }
                                ?>
                            </td>
                    <?php }}}
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tripDetails">
            <h3>Your Accomodations</h3>
            <?php if (empty($hotels)){
                echo '<h4> You have no accomodations booked. </h4>';
            } else{ ?>
            <div class="tableWrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Check-In Date</th>
                            <th>Check-Out Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($hotels)){ 
                    foreach($hotels as $h) { ?>
                        <tr>
                            <td></td>
                            <td>
                            <?php   
                                if ($h->checkintime < $date){
                                    echo "<p class='unavailable'>Completed</p>";
                                } else{
                                echo "<form action='./deleteHotelBooking.php' method='post'>
                                            <input type='hidden' name='id' value='$h->id'/>
                                            <input type='submit' class='deleteBtn' name='cancelHotel' value='Cancel'/>
                                    </form>";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php }}}
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tripDetails">
            <h3>Your Vehicle Rentals</h3>
            <?php if (empty($vehicles)){
                echo '<h4> You have no vehicle rentals. </h4>';
            } else{ ?>
            <div class="tableWrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Make/Model</th>
                            <th>Price</th>
                            <th>Rental Company</th>
                            <th>Pick-Up Date</th>
                            <th>Return Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($vehicles)){ 
                    foreach($vehicles as $v) { ?>
                        <tr>
                            <td><?=  $v->vehiclemake; ?> <?=  $v->vehiclemodel; ?><br><a class="imageBtn" target="_blank" href="./images/vehicles/<?= $v->vehicleimage?>">View Image</a></td>
                            <td>$<?=  $v->vehicleprice; ?></td>
                            <td><?=  $v->rentalcompanyname; ?><br>
                                <?=  $v->rentalcompanyaddress; ?></td>
                            <td><?=  $v->pickupdate; ?></td>
                            <td><?=  $v->returndate; ?></td>
                            <td>
                            <?php   
                                if ($v->pickupdate < $date){
                                    echo "<p class='unavailable'>Completed</p>";
                                } else{
                                echo "<form action='./deleteVechileRental.php' method='post'>
                                            <input type='hidden' name='id' value='$v->id'/>
                                            <input type='submit' class='deleteBtn' name='cancelVehicleRental' value='Cancel'/>
                                    </form>";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php }}}
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'views/footer.php';
?>