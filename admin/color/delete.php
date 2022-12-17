<?php
        $id = $_GET['color_id'];
        //Kết nối DB
        include '../connect/open-connect.php';
        //Lấy dữ liệu từ DB ra
        $sql = "DELETE FROM color WHERE color_id = $color_id";
        mysqli_query($connect, $sql);
        include '../connect/close-connect.php';
        header("location:color_list.php");
?>