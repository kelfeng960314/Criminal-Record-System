<!--
YouTube. (2020). YouTube. Retrieved December 22, 2021, from https://www.youtube.com/watch?v=gCo6JqGMi30. 
I followed the tutorials in this video to create and modify login functions.) 
-->

<?php

if(isset($_POST['submit'])) {
    require 'dbh.inc.php';    
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    if(!$conn){
        die('Connectyiioned failed: '. mysqli_connect_error());

    }else{
        $sql = "select * from users where usersUid = '$uid' && usersPwd = '$pwd' && userType = 'admin'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION['login']=true;
            $_SESSION['uid']=$uid;
        

            header("Location:admin.php");
        }
        else{
            header("location:./login.php?=wrongpassword");
        }
    }
}