

        <!DOCTYPE html>    
<html>    
<head>    
    <title>Admin Login Form</title>    
    <link rel="stylesheet" href='loginform.css' type='text/css'>   
</head>



<body>
<section class="login">
<div class = 'login'>
        <h1> LOG IN </h1>
        
        <form id='login' action = "adminlogin.inc.php" method = "post">
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

 
