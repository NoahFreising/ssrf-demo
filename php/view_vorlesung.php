<?php
include "connect_db.php";
session_start();
if(!isset($_SESSION["logged_in"]) || !$_SESSION["logged_in"]) {
  header("Location: login.php");
}
if($_GET["vorlesung"] != null) {
    $vorlesung = $_GET["vorlesung"];
    $schnitt = $vorlesungen[$vorlesung];
}
if ($_GET["url"] != null) {
    $note = file_get_contents($_GET["url"]."?vorlesung=".urlencode($_GET["vorlesung"])."&matrikelnr=".urlencode($_SESSION["matrikelnr"]));
}

?>

<h1><?=$vorlesung?></h1>
<!-- <img src="image_hacker.jpg" width="15%"/> -->
<p>Schnitt: <?=$schnitt?></p>
<?php if($note) echo "<p> Note: " . $note . "</p>"; ?>
<form>
    <input type="hidden" name="url" value="http://localhost/note.php">
    <input type="hidden" name="vorlesung" value="<?=$vorlesung?>">
    <input type="submit" value="Ihre Note abfragen"/>
</form>

<p>
    <a href="index.php">Back to shop</a>
</p>