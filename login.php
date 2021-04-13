<?php
    use OnRoute\models\{Database, User};
    require_once 'vendor/autoload.php';
    require_once 'library/functions.php';

    //Add unqiue css files here
    $css = array('styles/login.css');
    require_once './views/header.php';
    require_once './Models/Database.php';
    require_once './Models/User.php';


    $dbcon = Database::getDB();
    $user = new User();

    $invalid = "";
    
    if (isset($_POST['login'])) {
        //Add validation here
        $email = $_POST['in_email'];
        $hashedPass = md5($_POST['in_pass']);

        $u = $user->getUser($dbcon, $email, $hashedPass);

        if (!$u == null) {
            $_SESSION['userID'] = $u->id;
            $_SESSION['userEmail'] = $u->email;
            $_SESSION['userFirstName'] = $u->firstname;
            $_SESSION['userLastName'] = $u->lastname;
            header('Location: Flights.php');
        } else {
            //Change this to something useful
            $invalid = "<p>Invalid username and/or password</p>";
        }
    }
?>

<form action="login.php" method="post" id="login-form">
    <h2>Login</h2>
    <div class="tripFrom">
        <div class="tripFrom__input">
            <label for="in_email">Email: </label>
            <input type="text" name="in_email" required/>
        </div>
        <div class="tripFrom__input">
            <label for="in_pass">Password: </label>
            <input type="password" name="in_pass" required/>
        </div>
        <?= $invalid ?>
        <input class="loginBtn" type="submit" value="Login" name="login">
    </div>
</form>



<?php
    require_once 'views/footer.php';
?>