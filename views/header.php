<!--Header-->
<?php
session_start();

$headerMenu = [
    'Home' => 'index.php',
    'Flights' => 'flights.php',
    'Accommodations' => 'accommodations.php',
    'Vehicle Rental' => 'vehicles.php',
    'Customer Service' => 'services.php'
];

$loginMenu = [];
$welcome_msg = "";

//Sample for later
if (isset($_SESSION['userID'])) {
    $loginMenu[$_SESSION['userFirstName'] . " " .  $_SESSION['userLastName']] = "";
    $loginMenu['Logout'] = 'logout.php';
} else {
    $loginMenu['Login'] = 'login.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<div class="page">
    <head>
        <meta charset="utf-8" />
        <title>onRoute - Travel Better</title>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link type="text/css" rel="stylesheet"  href="styles/global.css" />
        <?php
            if (isset($css) && is_array($css))
            foreach ($css as $path)
                printf('<link rel="stylesheet" type="text/css" href="%s" />', $path);
        ?>
        <script src="https://kit.fontawesome.com/2956115494.js" crossorigin="anonymous"></script>
        <script src="library/mainForm.js"></script> 
    </head>
    <body>
        <header>
            <h1><a href="index.php" class="homeLink">onRoute <i class="fas fa-route"></i></a></h1>
        <nav>
            <?php echo displayNavigation($headerMenu) . displayNavigation($loginMenu); ?>
        </nav>
        <?php echo $welcome_msg ?>
        </header>