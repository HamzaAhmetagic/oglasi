<?php
    require_once("connection.php");
    session_start();
    $sql = "SELECT * FROM category";
    $query = mysqli_query($con,$sql);
    $category = mysqli_fetch_all($query,MYSQLI_ASSOC);
//    var_dump($category);
    require_once("views/add.new.oglas.view.php");
?>