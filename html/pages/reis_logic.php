<?php
session_start();
include 'conn.php';

    $name = $_POST["name"];
    $omschrijving = $_POST["omschrijving"];
    $omschrijving_2 = $_POST['omschrijving_2'];
    $omschrijving_3 = $_POST['omschrijving_3'];

    $stmt = $connection->prepare("INSERT INTO products (name) VALUES(:name)");
    $stmt = $connection->prepare("INSERT INTO products_Info (omschrijving, omschrijving_2, omschrijving_3) VALUES (:omschrijving, :omschrijving_2, :omschrijving_3)");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":omschrijving", $omschrijving);
    $stmt->bindParam(":omschrijving_2", $omschrijving_2);
    $stmt->bindParam(":omschrijving_3", $omschrijving_3);
    $stmt->execute();

    header('Location: /pages/reizen.php');
?>