<?php
session_start();
include 'conn.php';

$stmt = $connection->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(['id' => $_GET['id']]);
$users = $stmt->fetch();
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
    <div class="full-login">
        <form class='product_form' action='user_update_logic.php' name='food_update_logic' method="POST">
        <div class="back-sh">
            <a href="dashboard.php" class="backi"><-- Back</a>
        </div>
        <div class="row555">
            <label>Id van product</label> 
            <input type="text" name="id" value= "<?php echo $users['id']; ?>" >
            <label>Usertype</label>
            <input type="text" name="usertype" value= "<?php echo $users['usertype']; ?>" >
        </div>
        <div class="row55">
            <input type="submit" value='update' class="button-log"/>
        </div>
        </form>
    </div>
</header>
</html>