<?php
    if($_GET["product"] != null) {
        $product = $_GET["product"];
        // calculate stock by adding ascii values of all characters in product name
        $stock = 0;
        for ($i = 0; $i < strlen($product); $i++) {
            $stock += ord($product[$i]);
        }
        echo $stock;
    }
?>