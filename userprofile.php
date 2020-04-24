<?php
    require_once("connection.php");
    session_start();
    $user = $_SESSION["user"];
    $user_id = $user["id"];
    $sql = "SELECT * FROM oglasi WHERE user_id = $user_id";
    $query = mysqli_query($con,$sql);
    $oglasi = mysqli_fetch_all($query,MYSQLI_ASSOC);
    $sql2 = "SELECT * FROM messages WHERE recipiant_id = $user_id";
    $query2 = mysqli_query($con,$sql2);
    $result = mysqli_fetch_all($query2,MYSQLI_ASSOC);
    $all_messages_number = 0;
    for ($i=0;$i<count($result);$i++){
        $all_messages_number++;
    }

$all_oglasi_number = 0;
for ($i=0;$i<count($oglasi);$i++){
    $all_oglasi_number++;
}
//    die(var_dump($result));
    require_once("views/userprofile.view.php");
?>