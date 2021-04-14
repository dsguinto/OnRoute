<?php
    use ONROUTE\models\{Database,User};
    require_once 'vendor/autoload.php';
    require_once 'library/functions.php';
    require_once './views/header.php';

    if (isset($_POST['register'])) {
        $db = Database::getDB();
        $user = new User();
        
        $email = $_POST['email'];
        $hashedPass = md5($_POST['pass']);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pnumber = $_POST['pnumber'];

        $u = $user->addUser($db, $email, $hashedPass, $fname, $lname, $pnumber);
        echo $u;
    }
?>
<form action="./register.php" method="POST">
    <div>
    Email: <input type="text" name="email" required/>
    </div>
    <div>
        Password: <input type="password" name="pass" required/>
    </div>
    <div>
        First Name: <input type="text" name="fname" required/>
    </div>
    <div>
        Last Name: <input type="text" name="lname" required/>
    </div>
    <div>
        Phone Number: <input type="text" name="pnumber" required/>
    </div>
    <input type="submit" name="register" value="Register">
</form>

<?php
    require_once './views/footer.php';
?>