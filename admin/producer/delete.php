<?php
        $producer_id = $_GET['producer_id'];
        //Kết nối DB
        include '../connect/open-connect.php';
        //Lấy dữ liệu từ DB ra
        $sql = "DELETE FROM producer WHERE producer_id = $producer_id";
        mysqli_query($connect, $sql);
        include '../connect/close-connect.php';
        header("location:producer_list.php");
?>