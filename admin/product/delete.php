<?php
        $product_id = $_GET['product_id'];
        //Kết nối DB
        include '../connect/open-connect.php';
        //Lấy dữ liệu từ DB ra
        $sql = "DELETE FROM product WHERE product_id = $product_id";
        mysqli_query($connect, $sql);
        include '../connect/close-connect.php';
        header("location:product_list.php");
?>