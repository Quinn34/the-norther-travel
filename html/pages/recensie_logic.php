<?php
session_start();
include 'conn.php';


    
    $recensie = $_POST["recensie"];
    $username = $_POST["username"];


    $stmt = $connection->prepare("INSERT INTO recensies (recensie, username) VALUES(:recensie,:username)");
    $stmt->bindParam(":recensie", $recensie);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    header('Location: /pages/reizen.php');
 
?>