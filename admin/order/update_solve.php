<?php
   $order_id = $_POST['order_id'];
   $status = $_POST['status'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "UPDATE orders SET status = '$status' WHERE order_id = $order_id";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:order_list.php");
?>
