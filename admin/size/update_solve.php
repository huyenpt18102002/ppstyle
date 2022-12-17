<?php
   $size_id = $_POST['size_id'];
   $size_name = $_POST['size_name'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "UPDATE size SET size_name = '$size_name' WHERE size_id = $size_id";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:size_list.php");
?>