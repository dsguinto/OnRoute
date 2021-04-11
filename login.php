<?php
    use OnRoute\models\{Database, User};
    require_once 'vendor/autoload.php';
    require_once 'library/functions.php';
    require_once './views/header.php';
    require_once './Models/Database.php';
    require_once './Models/User.php';

    $dbcon = Database::getDB();
    $user = new User();
    
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
            echo 'Incorrect username or password';
        }
    }
?>

<h2>Login</h2>
<form action="login.php" method="post" id="login-form">
    <div>
        <label for="in_email">Email: </label>
        <input type="text" name="in_email" required/>
    </div>
    <div>
        <label for="in_pass">Password: </label>
        <input type="password" name="in_pass" required/>
    </div>
    <input type="submit" value="Login" name="login">
</form>



<?php
    require_once 'views/footer.php';
?>