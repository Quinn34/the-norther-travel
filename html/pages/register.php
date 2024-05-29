<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/jop.css">
</head>
<header>
    <div class="nav">
        <div class="left-75">
            <div class="name">
                <img src="/assets/north travel logo.png" class="kook">
            </div>
        </div>
        <div class="right-20">
            <div class="buttons">
                
            <a href="../index.php" class="Items">Home</a>     
            <a href="/pages/overons.php" class= "Items">Over ons</a>
            <a href="/pages/reizen.php" class= "Items">Reizen</a>     
            <a href="#" class="Items">Contact</a>     
        </div>
    </div>
    <div class="right-5">
        <div class="buttons">
            
            <a href="#" class="Items">Login</a>   
        </div>
    </div>
</div>
</header>
<body>
    <div class="row111">
        
    </div>
<div class="full-login">
    <form class='register_form' action='register_logic.php' name='login_logic'method="POST">
        <div class="back-sh">
            <a href="/pages/login.php" class="backi"><-- Back</a>
        </div>
        <div class="mid">
            <h3>Register</h3>
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
        <input type="submit"  value='register' class="button-log"/>
    </div>
</form>
</div>
</body>