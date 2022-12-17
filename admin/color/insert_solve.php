<?php
    $color_id = $_POST['color_id'];
    $color_name = $_POST['color_name'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "INSERT INTO color(color_id, color_name) 
    VALUES ('$color_id','$color_name')";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:color_list.php");
?>