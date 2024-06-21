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
            <a href="#" class= "Items">Reizen</a>     
            <a href="/pages/contact.php" class="Items">Contact</a>     
        </div>
    </div>
    <div class="right-5">
        <div class="buttons">
            <a href="/pages/login.php" class="Items">Login</a>   
        </div>
    </div>
    </div>
    <div class="row112">

    </div>
    <div class="in-out">
            <h1>Je bent succesvol ingelogd als admin!!!</h1>
            <br><br><br>
            <a href="logout.php"class="logoutt">KLIK HIER om uit te loggen</a>     
        </div>

        <div class="full-login">
            <form class='register_form' action='user_delete_logic.php' name='user_delete_logic'method="POST">
            <label>gebruiker verwijderen</label>
                <div class="row55">
                    <label>Id van user: </label> 
                    <input type="text" name="id_user"placeholder="   id of user" required>
                </div>
                <div class="row55">
                    <input type="submit" value='delete user' class="button-log"/>
                </div>
            </form>
        </div>