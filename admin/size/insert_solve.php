<?php
    $size_id = $_POST['size_id'];
    $size_name = $_POST['size_name'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "INSERT INTO size(size_id, size_name) 
    VALUES ('$size_id','$size_name')";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:size_list.php");
?>