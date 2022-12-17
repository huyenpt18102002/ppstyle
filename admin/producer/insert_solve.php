<?php
    $producer_id = $_POST['producer_id'];
    $producer_name = $_POST['producer_name'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "INSERT INTO producer(producer_id, producer_name) 
    VALUES ('$producer_id','$producer_name')";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:producer_list.php");
?>