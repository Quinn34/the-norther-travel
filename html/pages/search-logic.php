<?php
    require 'conn.php';
    $search = $_POST['search'];
    $sql = "SELECT * FROM Landen WHERE naam LIKE '%$search%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>

