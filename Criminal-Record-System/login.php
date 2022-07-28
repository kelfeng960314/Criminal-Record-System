
<!--
YouTube. (2020). YouTube. Retrieved December 22, 2021, from https://www.youtube.com/watch?v=gCo6JqGMi30. 
I followed the tutorials in this video to create and modify login functions.) 
-->
<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" href='loginform.css' type='text/css'>   
</head>



<body>
<section class="login">
<div class = 'login'>
        <h1> LOG IN </h1>
        
        <form id='login' action = "login.inc.php" method = "post">
        <label for="username">
					<i class="fas fa-user"></i>
				</label>
            <input type="text" name= "uid" id= 'name' placeholder="Username">
            <label for="password">
					<i class="fas fa-lock"></i>
				</label>
            <input type="password" name= "pwd" id='pwd' placeholder="Password">

            <button type = "submit" name = "submit" id='log'>LOG IN</button>
            
</div></body></html>

        </form>
        <h3> Are you an administrator? </h3>
        <a href='adminlogin.php'>Log in Here!</a>
                </section>

