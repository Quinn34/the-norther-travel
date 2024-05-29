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
<header>
<div class="nav">
        <div class="left-75">
            <div class="name">
                <img src="/assets/north travel logo.png" class="kook">
            </div>
        </div>
        <div class="right-20">
            <div class="buttons">
            <a href="#" class="Items">Home</a>     
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
</header>
 <div class="full-login">
    <form class='register_form' action='login_logic.php' name='login_logic'method="POST">
        <div class="mid">
            <h3>Log In</h3>
        </div>
        <div class="row55">
            <p>Email user</p>
            <input type="Email" name="Email" placeholder="   Vul Email in" required/>
        </div>
    <div class="row55">
        <p>Wachtwoord</p>
        <input type="password" name="password"placeholder="   Password" required>
    </div>
    <div class="row55">
        <input type="submit" name="submit" value='Login' class="button-log"/>
    </div>
    <div class="back-sh">
        <a href="/pages/register.php" class="backi"> Register Now!</a>
    </div>
</form>
</div>
</body>
</html>