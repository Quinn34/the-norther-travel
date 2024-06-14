<?php
session_start();
include 'conn.php';


    
    $password = $_POST["password"];
    $email = $_POST['Email'];
    
    $stmt = $connection->prepare("INSERT INTO users (password, email) VALUES(:pass, :mail)");
    $stmt->bindParam(":pass", $password);
    $stmt->bindParam(":mail", $email);
    $stmt->execute();

    header('Location: login.php');
 
?>