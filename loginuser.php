<?php
    session_start();
    require_once("connection.php");
    $name = $_POST["name"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
    $query = mysqli_query($con,$sql);
    $user = mysqli_fetch_assoc($query);
    if($user){
        $_SESSION["user"]=$user;
        header("Location: index.php");
    }else{
    header("Location: login.php");
    }