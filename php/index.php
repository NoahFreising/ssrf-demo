<?php

   include "connect_db.php";
?>
<html>
 <head>
 </head>
 <body>
  <h1>Web-Shop</h1>
  <div>
    <p>
      We have the best haxx for offer!
    </p>
    <h2>Products</h2>
    <?php
    foreach ($products as $product => $price) {
      ?>
      <p>
        <b><a href="view_product.php?product=<?=urlencode($product)?>"><?= $product ?></a></b> - $<?= $price ?>
      </p>
      <?php
    }
    ?>
    <p>

    </p>
  </div>

 </body>
</html>