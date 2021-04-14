<?php
namespace OnRoute\models;
use PDO;
class User{
    public function getUser($dbcon, $email, $pass){
        $sql = "select * from Users where email = ? AND password=?";

        $pdostm = $dbcon->prepare($sql);
        $count = $pdostm->execute([$email, $pass]);

        if ($count) {
            return $pdostm->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
    public function addUser($dbcon, $email, $pass, $fname, $lname, $pnumber){
        $sql = "insert into users (password, firstname, lastname, email, phonenumber) values (?,?,?,?,?)";

        $count = $pdostm = $dbcon->prepare($sql)->execute([$pass, $fname, $lname, $email, $pnumber]);
        if ($count) {
            return 'Registration successful';
        } else {
            return 'Registration failed';
        }
    }
}
?>