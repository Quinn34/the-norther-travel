<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/jop.css">
</head>
<body>
    <div class="backround-image">

    
 <div class="nav-opvul">
 <?php
    include 'nav.php';
 ?> 
 </div>
 <div class="container-login">
        <div class="input ">
            <form action="login-logic.php" name="login-logic" method="POST">
            <label> Username:</label>
        
    <input type="text" name="username" placeholder="username" required>
    <label>Password:</label>
    <input type="password" name="password" placeholder="password"required>
    <input type="submit" value="Login" class="button">
    <a href="register.php">register</a>
    </div>  
    </div>
    </div>
</body>
</html>