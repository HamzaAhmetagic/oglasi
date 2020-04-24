<?php
require_once("connection.php");
session_start();
$user_id = $_SESSION["user"]["id"];

['title' => $title, 'text' => $text, 'price' => $price, 'kategorija' => $kategorija, 'active' => $active] = $_POST;
if (isset($_POST["used"])){
    $used = 1;
} else {
    $used = 0;
}
$sql = "INSERT INTO oglasi (user_id,title,used,price,text,active,category)  VALUES ($user_id,'$title',$used,$price,'$text',$active,'$kategorija')";
$query = mysqli_query($con,$sql);
//var_dump($sql);
header("Location: index.php");
?>