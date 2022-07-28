<?php

if(isset($_POST["submit"])){
    
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputSignup($uid, $pwd, $pwdrepeat) !== false){
        header("location: ./signup.php?error=emptyinput");
        exit();
    }

    if(invalidUid($uid) !== false){
        header("location: ./signup.php?error=invaliduid");
        exit();
    }

    if(pwdMatch($pwd, $pwdrepeat) !== false){
        header("location: ./signup.php?error=confirmationerror");
        exit();
    }

    createUser($conn, $uid, $pwd);

}
else {
    header("location: ./signup.php");
    exit();
}

