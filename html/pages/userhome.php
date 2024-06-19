<?php
    session_start();
    include 'conn.php';
    if (!isset($_SESSION["email"])) {
        header("Location: x.php");
        exit(); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css" >
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
            <a href="/pages/contact.php" class="Items">Contact</a>     
        </div>
    </div>
    <div class="right-5">
        <div class="buttons">
            <a href="/pages/login.php" class="Items">Login</a>   
        </div>
    </div>
    </div>
    <body>
    <div class="row112">
        
    </div>

        <div class="in-out">
            <h1>Je bent succesvol ingelogd!!!</h1>
            <br><br><br>
            <a href="logout.php"class="logoutt">KLIK HIER om uit te loggen</a>     
        </div>
    </body>
