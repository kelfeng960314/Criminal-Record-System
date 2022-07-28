<?php

if(isset($_POST['submit'])) {
    require 'dbh.inc.php';    
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    if(!$conn){
        die('Connectyiioned failed: '. mysqli_connect_error());

    }else{
        $sql = "select * from users where usersUid = '$uid' && usersPwd = '$pwd'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION['login']=true;
            $_SESSION['uid']=$uid;
        

            header("Location:index.php");
        }
        else{
            header("location:./login.php?=wrongpassword");
        }
    }
}