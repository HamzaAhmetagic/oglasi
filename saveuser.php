<?php
    require_once("connection.php");
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $sql = "INSERT INTO users VALUES(NULL,'$name','$email','$password',0)";
    $query = mysqli_query($con,$sql);
//    if (mysqli_affected_rows($query) == 1){
////        header("Location: login.php");
////    } else {
////        header("Location: register.php");
////    }
    header("Location: login.php");
