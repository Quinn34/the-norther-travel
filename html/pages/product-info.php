<?php
require 'conn.php';
$userID=$_GET['id'];
?>
<div class="nav">
        <div class="left-75">
            <div class="name">
                <img src="/assets/north travel logo.png" class="kook">
            </div>
        </div>
        <div class="right-20">
            <div class="buttons">
            <a href="/index.php" class="Items">Home</a>     
            <a href="/pages/overons.php" class= "Items">Over ons</a>
            <a href="#" class= "Items">Reizen</a>     
            <a href="#" class="Items">Contact</a>     
        </div>
    </div>
    <div class="right-5">
        <div class="buttons">
            <a href="/pages/login.php" class="Items">Login</a>   
        </div>
    </div>
    </div>
    <div class="tussen-stuk"></div>
    <link rel="stylesheet" href="/css/jop.css">







<?php
    $stmt = $connection->query("SELECT products.name
    FROM products
    INNER JOIN products_Info
    ON products.id=products_Info.id");
    while ($row = $stmt->fetch()) {
        echo '<div class="conatainer-product-info">';
        echo '<img class="hotel" src="../assets/hotel.png" alt="">';









        // echo '<img class="rijzen-fotos" src="../assets/chinatown1.jpeg" alt="">';
        //      echo '<div class="text-menu">';
        //      echo '<div class="container-name">';
        //    //    echo '<a href="product-info.php?id=' . $row['id'] . '">';
        //      echo $row['name'] ."<br />\n";
        //      echo '</div>';
        //      echo '<div class="container-info">';
        //       echo $row['omschrijving'] ."<br/>\n";
        //       echo $row['omschrijving_2'] ."<br/>\n";
        //       echo $row['omschrijving_3'] ."<br/>\n";
        //       echo '</div>';
        //    echo '<div class="container-button">';
        //    //    echo ' <input class="buton-reizen" <a href="product-info.php?id=echo[id] $GET</a> type="submit" name="submit" value="Submit">';
        //       echo '</div>';

        //       echo '</div>';
        //       echo '</div>';
        //       echo '</a>';









}
?>