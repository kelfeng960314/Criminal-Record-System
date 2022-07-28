<!--
YouTube. (2020). YouTube. Retrieved December 22, 2021, from https://www.youtube.com/watch?v=gCo6JqGMi30. 
I followed the tutorials in this video to create and modify login functions.) 
-->

<?php

function emptyInputSignup($uid, $pwd, $pwdrepeat){
    $result;
    if(empty($uid) || empty($pwd) || empty($pwdrepeat) ){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($uid){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat){
    $result;
    if($pwd !== $pwdrepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function createUser($conn, $uid, $pwd){
    $sql = "INSERT INTO users (usersUid, usersPwd) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ./signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss", $uid, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ./signup.php?error_none");
    exit();

}

function emptyInputLogin($uid, $pwd){
    $result;
    if(empty($uid) || empty($pwd) ){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function loginUser($conn, $uid, $pwd){
    
}