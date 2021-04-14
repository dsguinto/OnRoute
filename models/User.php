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
}
?>