<?php
session_start();
include 'conn.php';


    
    $recensie = $_POST["recensie"];

    $stmt = $connection->prepare("INSERT INTO recensies (recensie) VALUES(:recensie)");
    $stmt->bindParam(":recensie", $recensie);
    $stmt->execute();

    header('Location: /pages/reizen.php');
 
?>