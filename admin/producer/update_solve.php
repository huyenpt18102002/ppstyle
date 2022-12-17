<?php
   $producer_id = $_POST['producer_id'];
   $producer_name = $_POST['producer_name'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "UPDATE producer SET producer_name = '$producer_name' WHERE producer_id = $producer_id";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:producer_list.php");
?>