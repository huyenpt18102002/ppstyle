<?php
        $product_detail_id = $_GET['product_detail_id'];
        //Kết nối DB
        include '../connect/open-connect.php';
        //Lấy dữ liệu từ DB ra
        $sql = "DELETE FROM product_detail WHERE product_detail_id = $product_detail_id";
        mysqli_query($connect, $sql);
        include '../connect/close-connect.php';
        header("location:product_detail_list.php");
?>