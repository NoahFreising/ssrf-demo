<?php
include "connect_db.php";
session_start();

if($_GET["vorlesung"] != null && $_GET["matrikelnr"] != null) {
    $vorlesung = $_GET["vorlesung"];
    $matrikelnr = $_GET["matrikelnr"];
    $note = $noten[$matrikelnr][$vorlesung];
    echo $note;
}
?>