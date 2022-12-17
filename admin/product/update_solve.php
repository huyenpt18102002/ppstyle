<?php
   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $material = $_POST['material'];
   $catergory_id = $_POST['catergory_id'];
   $producer_id = $_POST['producer_id'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "UPDATE product SET product_name = '$product_name', material ='$material', catergory_id = '$catergory_id',
    producer_id = '$producer_id' WHERE product_id = $product_id";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:product_list.php");
?>