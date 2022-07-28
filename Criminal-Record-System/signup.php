
    <!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" href='signupform.css' type='text/css'>   
</head>
<body>
    <section class="signup">
        <div class = 'signup'>
        <h1> Sign Up </h1>
        <form action = "signup.inc.php" method = "post">

            <input type="text" name= "uid" placeholder="Username">
   
            <input type="password" name= "pwd" placeholder="Password">

            <input type="password" name= "pwdrepeat" placeholder="Password Confirmation">
            <button type = "submit" name = "submit" >SIGN UP</button>
</div></body></html>
        </form>

        <?php
        if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput")
            echo "<p>Please fill in all fields<.p>";
        }

        else if ($_GET["error"] == "invaliduid"){
            echo "<p>Please fill proper user id<.p>";
        }
        else if ($_GET["error"] == "confirmationerror"){
            echo "<p>Please retype passwords<.p>";
        }
    ?> 

    </section>



    