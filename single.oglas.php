<?php
    require_once("connection.php");
    session_start();
    $id = $_GET["id"];
    $sql = "SELECT * FROM oglasi WHERE id=$id";
    $query = mysqli_query($con,$sql);
    $oglas = mysqli_fetch_assoc($query);
    $user_id = $oglas["user_id"];
    $sql2 = "SELECT * FROM users WHERE id=$user_id";
    $query = mysqli_query($con,$sql2);
    $owner = mysqli_fetch_assoc($query);
    $show_form = $owner['id'] == $_SESSION['user']['id'];
//    var_dump($show_form);
//    var_dump($owner);
    require_once("views/single.oglas.view.php");
?>