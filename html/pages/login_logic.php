<?php
session_start();
include 'conn.php';

    if(empty($_POST["email"]) || empty($_POST["password"])){
        header("Location: login.php");
        exit();
    }
    
    $username = $_POST["email"];
    $password = $_POST["password"];
    
    $stmt = $connection->prepare("SELECT * FROM users WHERE email=:email AND password=:pass");
    $stmt->execute(['email' => $email,'pass' => $password]);
    $user = $stmt ->fetch();

    if (!$user){
        header("Location: login.php");
    } else {
        $_SESSION["email"] = $email;
        header("Location: dashboard.php");
    }
?>