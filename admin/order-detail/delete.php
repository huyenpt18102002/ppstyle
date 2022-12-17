<?php
        $order_detail_id = $_GET['order_detail_id'];
        //Kết nối DB
        include '../connect/open-connect.php';
        //Lấy dữ liệu từ DB ra
        $sql = "DELETE FROM order_detail WHERE order_detail_id = $order_detail_id";
        mysqli_query($connect, $sql);
        include '../connect/close-connect.php';
        header("location:order_detail_list.php");
?>