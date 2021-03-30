<?php
    use OnRoute\models\Database;
    
    require_once './vendor/autoload.php';//doesen't work
    require_once 'library/functions.php';
    require_once './models/Hotel.php';
    require_once './models/Database.php';//if autoload is working, we don't seem to need this

    //Add unqiue css files here
    $css = array('styles/accommodations.css');
    require_once('views/header.php');
    
    //test database conneciton
    $dbcon = Database::getDB();
    
    //test is function is working
    $h = new Hotel();
    $hotels = $h->getAllHotels($dbcon);
    //echo $hotels;
    
    //test is function is working
    $hotel = $h->getHotelById($dbcon);
    //var_dump($hotel);

    //test is function is working: work in progress
    $city = 'Lagos';
    $c = $h->getHotelsByCity($city, $dbcon);
    var_dump($c);
   
    
    /*
    foreach ($hotels as $hotel){
        echo $hotel->hotelname;
    }


    if(isset($_POST['tripFrom__input_btn'])){
        $city = $_POST['city'];
        echo $city;

        $dbcon = Database::getDB();
        $h = new Hotel();
        $hotels = $h->getHotelsByCity($city, $dbcon);
        echo $hotels;
        echo $hotels->hotelname;
    }
*/



?>

<!--copied from content.php and modified-->
<!-- Content -->
<main>

    <!-- <div class="background"></div> -->
    <h2>Accommodations</h2>
    <!--FORM TO BE FIXED IN ORDER TO FUNCTION (names, paths, etc.)-->
    <form method="post" action="">
        <div class="initialForm">
            <h2>Your Dream Vacation Awaits</h2>
        </div>
        <div class="tripFrom">
            <div class="tripFrom__input">
                <label>Going To</label>
                <input type=text name="city" />
            </div>
                <div class="tripFrom__input">
                <label>Check In</label>
            <input type=date />
            </div>
            <div class="tripFrom__input">
                <label>Check Out</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <input class="tripFrom__input_btn" type="submit" name="tripFrom__input_btn" value="Search" />
            </div>
        </div>
    </form>
    <?php
    /*
    if(isset($_POST['tripFrom__input_btn'])){
        $city = $_POST['city'];
        echo $city;
        
        $dbcon = Database::getDB();
        $h = new Hotel();
        //$hotels = $h->getHotelsByCity($city, $dbcon);
        /*echo $hotels;
        echo $hotels->hotelname;*/
        //$hotels = $h->getHotelById($dbcon);
        //var_dump($dbcon);
    ?>
    <div class="searchResult">
        <h2><? /*show city*/ ?></h2>
        <h3><? /*show hotel name*/ ?></h3>
        <div class="searchResult__container">
            <div class="searchResult__image">
                <?/*show image*/ ?>
            </div>
            <div class="searchResult__desc">
                <? /* */ ?>
            </div>
        </div>
        <!--
        <table class="searchResult__table">
            <thead>
            <tr>
                <th scope="col">ID</th>
            </tr>
            </thead>
        </table>
        -->
    </div>
    <div class="deals">
        <h2>Popular Choices</h2>
        <div class="deals__popular">
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a0001.jpg"><img src="images/accommodations/a0001.jpg" alt="" width="" /></a>
                </p>
            </div>
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a0002.jpg"><img src="images/accommodations/a0002.jpg" alt="" width="" /></a>
                </p>
            </div>
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a0005.jpg"><img src="images/accommodations/a0005.jpg" alt="" width="" /></a>
                </p>
            </div>
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a0006.jpg"><img src="images/accommodations/a0006.jpg" alt="" width="" /></a>
                </p>
            </div>
        </div>
        <h2>Lowest Prices</h2>
        <div class="deals__budget">
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a0003.jpg"><img src="images/accommodations/a0003.jpg" alt="" width="" /></a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a0004.jpg"><img src="images/accommodations/a0004.jpg" alt="" width="" /></a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a0006.jpg"><img src="images/accommodations/a0008.jpg" alt="" width="" /></a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a0006.jpg"><img src="images/accommodations/a0013.jpg" alt="" width="" /></a></p>
            </div>
        </div>
        </div>
    </div>
</main>


<?php
    require_once 'views/footer.php';
?>