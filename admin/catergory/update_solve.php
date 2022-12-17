<?php
   $catergory_id = $_POST['catergory_id'];
   $catergory_name = $_POST['catergory_name'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "UPDATE catergory SET catergory_name = '$catergory_name' WHERE catergory_id = $catergory_id";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:catergory_list.php");
?>