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
    //test is function is working: work in progress
    
    $city = "";
    $c = $h->getHotelsByCity($city, $dbcon);
    //var_dump($c);
    

    if(isset($_POST['tripFrom__input_btn'])){
        $city = $_POST['city'];
        //var_dump($city);
        $c = $h->getHotelsByCity($city, $dbcon);
        //var_dump($c);
        /*
        foreach ($c as $hotel){
            echo $hotel['hotelname'];
        }*/
    }
        //$dbcon = Database::getDB();
        //$h = new Hotel();
        //$hotels = $h->getHotelsByCity($city, $dbcon);
        /*echo $hotels;
        echo $hotels->hotelname;*/
        //$hotels = $h->getHotelById($dbcon);
        //var_dump($dbcon);
    ?>
    <div class="searchResult">
        <h2><?= $city ?></h2>
    <?php
    foreach ($c as $hotel){
            //echo $hotel['hotelname'];
            $hotelname = $hotel['hotelname'];//in arrays we retrieve properties with [] not =>
    ?>    
        <h3><?= $hotelname ?></h3>
        <div class="searchResult__container">
            <div class="searchResult__image">
                <?/*show image*/ ?>
                <img src="./images/accommodations/a<?=$hotel['id'] ?>.jpg" />
            </div>
            <div class="searchResult__desc">
                <? /* */ ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="deals">
        <h2>Popular Choices</h2>
        <div class="deals__popular">
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a1.jpg"><img src="images/accommodations/a1.jpg" alt="" width="" /></a>
                </p>
            </div>
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a2.jpg"><img src="images/accommodations/a2.jpg" alt="" width="" /></a>
                </p>
            </div>
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a5.jpg"><img src="images/accommodations/a5.jpg" alt="" width="" /></a>
                </p>
            </div>
            <div class="deals__popular_opt">
                <p>
                <a href="images/accommodations/a6.jpg"><img src="images/accommodations/a6.jpg" alt="" width="" /></a>
                </p>
            </div>
        </div>
        <h2>Lowest Prices</h2>
        <div class="deals__budget">
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a3.jpg"><img src="images/accommodations/a3.jpg" alt="" width="" /></a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a4.jpg"><img src="images/accommodations/a4.jpg" alt="" width="" /></a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a8.jpg"><img src="images/accommodations/a8.jpg" alt="" width="" /></a></p>
            </div>
            <div class="deals__budget_opt">
                <p><a href="images/accommodations/a13.jpg"><img src="images/accommodations/a13.jpg" alt="" width="" /></a></p>
            </div>
        </div>
        </div>
    </div>
</main>


<?php
    require_once 'views/footer.php';
?>