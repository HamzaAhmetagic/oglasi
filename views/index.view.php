<?php
require_once("partials/head.php");

$sql = "SELECT * FROM oglasi WHERE active = 1";
$query = mysqli_query($con,$sql);
$oglasi = mysqli_fetch_all($query,MYSQLI_ASSOC);
require_once("partials/header.php");
require_once("prikaz_oglasa.php");
require_once("partials/bottom.php");
?>
