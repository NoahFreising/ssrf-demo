<?php
include "connect_db.php";
if($_GET["product"] != null) {
    $product = $_GET["product"];
    $price = $products[$product];
}
if ($_GET["url"] != null) {
    $stock = file_get_contents($_GET["url"]."?product=".urlencode($_GET["product"]));
}

?>

<h1><?=$product?></h1>
<img src="image_hacker.jpg" width="15%"/>
<p>Price: $<?=$price?></p>
<?php if($stock) echo "<p> Stock: " . $stock . "</p>"; ?>
<form>
    <input type="hidden" name="url" value="http://localhost/stock.php">
    <input type="hidden" name="product" value="<?=$product?>">
    <input type="submit" value="Check availability"/>
</form>

<p>
    <a href="index.php">Back to shop</a>
</p>