<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/jop.css">
</head>
<body>
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
            <a href="/pages/contact.php" class="Items">Contact</a>     
        </div>
    </div>
    <div class="right-5">
        <div class="buttons">
            <a href="/pages/login.php" class="Items">Login</a>   
        </div>
    </div>
    </div>
    <div class="tussen-stuk"></div>

        <?php
     include 'conn.php';
     
     ?> 
     <div class="container-reizen-page">

        <?php

          $stmt = $connection->query("SELECT products.name, products.id, products_Info.omschrijving,  products_Info.omschrijving_2,  products_Info.omschrijving_3
          FROM products
          INNER JOIN products_Info
          ON products.id=products_Info.id");
          while ($row = $stmt->fetch()) {
            
             
            echo '<a class="container-reizen" href="product-info.php?id=' . $row['id'] . '">';

        
            //  echo '<a href="product-info.php?id=' . $row['id'] . '">';
             echo '<div class="blah-box">';
             echo '<img class="rijzen-fotos" src="../assets/chinatown1.jpeg" alt="">';
                  echo '<div class="text-menu">';
                  echo '<div class="container-name">';
                //    echo '<a href="product-info.php?id=' . $row['id'] . '">';
                  echo $row['name'] ."<br />\n";
                  echo '</div>';
                  echo '<div class="container-info">';
                   echo $row['omschrijving'] ."<br/>\n";
                   echo $row['omschrijving_2'] ."<br/>\n";
                   echo $row['omschrijving_3'] ."<br/>\n";
                   echo '</div>';
                echo '<div class="container-button">';
                //    echo ' <input class="buton-reizen" <a href="product-info.php?id=echo[id] $GET</a> type="submit" name="submit" value="Submit">';
                   echo '</div>';
     
                   echo '</div>';
                   echo '</div>';
                   echo '</a>';

          }          

        ?>
        </div>
 </div>
</body>
</html>
    <script src="js/main.jsx"></script>
    </body>
