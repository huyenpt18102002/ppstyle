<?php
    $catergory_id = $_POST['catergory_id'];
    $catergory_name = $_POST['catergory_name'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "INSERT INTO catergory(catergory_id, catergory_name) 
    VALUES ('$catergory_id','$catergory_name')";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:catergory_list.php");
?>