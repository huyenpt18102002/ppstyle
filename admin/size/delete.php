<?php
        $size_id = $_GET['size_id'];
        //Kết nối DB
        include '../connect/open-connect.php';
        //Lấy dữ liệu từ DB ra
        $sql = "DELETE FROM size WHERE size_id = $size_id";
        mysqli_query($connect, $sql);
        include '../connect/close-connect.php';
        header("location:size_list.php");
?>