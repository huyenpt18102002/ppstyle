<?php
        $user_id = $_GET['user_id'];
        //Kết nối DB
        include '../connect/open-connect.php';
        //Lấy dữ liệu từ DB ra
        $sql = "DELETE FROM user WHERE user_id = $user_id";
        mysqli_query($connect, $sql);
        include '../connect/close-connect.php';
        header("location:user_list.php");
?>