<?php
   $color_id = $_POST['color_id'];
   $color_name = $_POST['color_name'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "UPDATE color SET color_name = '$color_name' WHERE color_id = $color_id";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:color_list.php");
?>