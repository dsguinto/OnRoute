
<!-- A user can see the seats available and select the seat they want -->
<?php 
    require_once 'library/functions.php';
    $css = array("styles/seatSelection.css");
    require_once 'views/header.php';
?>
<main>
    <!-- Flight track form appears on page load -->
    <div class = "seatSelection">
        <h2>Please Select a Seat Below</h2>
        <form action="" method="POST" name = "seatSelection__form">
            <div class = "seatSelection_flex">
                <div>
                    <button class="seatSelection_btn" type="submit" name="seatSelect">Select</button>
                </div>
            </div>
        </form>
    </div>
    <!-- On form submission, mealConfirmation displays and mealSelection is set to display:none -->
    <div class = "seatConfirmation">
        <h2>Your Seat is <?php echo "#A" ?>. Thank you for your selection!</h2>
    </div>
</main>
<script src="library/seatSelection.js"></script>
<?php 
    require_once 'views/footer.php';
?>
