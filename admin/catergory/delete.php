<?php
        $catergory_id = $_GET['catergory_id'];
        //Kết nối DB
        include '../connect/open-connect.php';
        //Lấy dữ liệu từ DB ra
        $sql = "DELETE FROM catergory WHERE catergory_id = $catergory_id";
        mysqli_query($connect, $sql);
        include '../connect/close-connect.php';
        header("location:catergory_list.php");
?>