<?php
        $order_id = $_GET['order_id'];
        //Kết nối DB
        include '../connect/open-connect.php';
        //Lấy dữ liệu từ DB ra
        $sql = "DELETE FROM orders WHERE order_id = $order_id";
        mysqli_query($connect, $sql);
        include '../connect/close-connect.php';
        header("location:order_list.php");
?>