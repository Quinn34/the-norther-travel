<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/jop.css">
</head>
<div class="nav">
        <div class="left-75">
            <div class="name">
                <img src="/assets/north travel logo.png" class="kook">
            </div>
        </div>
        <div class="right-20">
            <div class="buttons">
            <a href="../index.php" class="Items">Home</a>     
            <a href="#" class= "Items">Over ons</a>
            <a href="#" class= "Items">Reizen</a>     
            <a href="#" class="Items">Contact</a>     
        </div>
    </div>
    <div class="right-5">
        <div class="buttons">
            <a href="#" class="Items">Login</a>   
        </div>
    </div>
    </div>
<body>
    <div class="backround-image">
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