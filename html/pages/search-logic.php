<?php
session_start();
include 'conn.php';
            $search = $_POST['search'];
            $sql = "SELECT * FROM users_data WHERE voornaam LIKE '%$search$' ";
            $stmt = $connection->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

            foreach ($result as $row) {
                echo $row['voornaam'];
            }
        
        ?>