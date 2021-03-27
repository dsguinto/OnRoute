<?php
    require_once 'library/functions.php';
    $css = array("styles/flightTracking.css");
    require_once 'views/header.php';
?>
<main>
    <div class = "flightInfo">
        <h2>Flight Information for Flight <?php echo "######" ?></h2>
         <!-- Import airline image-->
         <?php echo "Dynamically Rendered Airline Logo"?>
        <div class = flightInfo_row>
            <ul class = "row_item">
                <h3>Departure</h3>
                <li>Airport: <?php echo "YYZ" ?></li>
                <li>Terminal: <?php echo "2" ?></li>
                <li>Date: <?php echo "May 5, 2020" ?></li>
                <li>Time: <?php echo "21:00" ?></li>
            </ul>
            <div class = "row_item">
            <i class="fas fa-plane fa-3x"></i>
            </div>
            <ul class = "row_item">
                <h3>Arrival</h3>
                <li>Airport: <?php echo "YVR" ?></li>
                <li>Terminal: <?php echo "1" ?></li>
                <li>Date: <?php echo "May 6, 2020" ?></li>
                <li>Time: <?php echo "22:00" ?></li>
            </ul>
        </div>
    </div>
</main>
<?php 
    require_once 'views/footer.php';
?>