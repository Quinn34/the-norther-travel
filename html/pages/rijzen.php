<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/jop.css">
</head>
<body>
<!-- <?php
    include 'nav.php';
    ?>  -->

        <?php
     include 'conn.php';
     ?> 
     <div class="container-reizen-page">
        <?php
          $stmt = $connection->query("SELECT * FROM products");
          while ($row = $stmt->fetch()) {
   
             echo '<div class="container-reizen">';
             echo '<div class="box">';
             echo '<img class="rijzen-fotos" src="../assets/chinatown1.jpeg" alt="">';
                  echo '<div class="text-menu">';
                  echo $row['name'] ."<br />\n";
                   echo $row['product_info'] ."<br />\n";
                   echo '<div class="buton-menu">';
                   echo $row['price'] ."<br/>\n";
                   echo '</div>';
                   echo '</div>';
                   echo '</div>';
                   echo '</div>';
                }

        ?>
        </div>
 </div>
</body>
</html>