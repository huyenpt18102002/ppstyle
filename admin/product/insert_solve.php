<?php
    $name = $_POST['product_name'];
    $material = $_POST['material'];
    $catergory_id = $_POST['catergory_id'];
    $producer_id = $_POST['producer_id'];
    include_once "../connect/open-connect.php";
    $sql = "INSERT INTO product(product_name, material, catergory_id, producer_id)
            VALUES ('$name', '$material', '$catergory_id', '$producer_id')";
    $result = mysqli_query($connect, $sql);
    include_once "../connect/close-connect.php";
    header("location:product_list.php");
?>