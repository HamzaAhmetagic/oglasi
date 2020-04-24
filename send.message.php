<?php
    session_start();
    require_once("connection.php");
    $body = $_POST["message"];
    $recipient_id = $_POST["owner_id"];
    $user_id = $_SESSION['user']['id'];


    $sql = "INSERT INTO messages VALUES(NULL,$recipient_id,$user_id,'$body',NULL)";
    $query = mysqli_query($con,$sql);
//    var_dump($sql);
?>