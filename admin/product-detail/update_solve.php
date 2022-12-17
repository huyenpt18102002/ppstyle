<?php
   $product_detail_id = $_POST['product_detail_id'];
   $product_id = $_POST['product_id'];
   $color_id = $_POST['color_id'];
   $size_id = $_POST['size_id'];
   $price = $_POST['price'];
   $quantity = $_POST['quantity'];
   $product_img = $_FILES['product_img']['name'];
   $product_img_tmp = $_FILES['product_img']['tmp_name'];
   move_uploaded_file( $_FILES['product_img']['tmp_name'],"../uploads/".$_FILES['product_img']['name']);
   $product_img1 = $_FILES['product_img1']['name'];
   $product_img1_tmp = $_FILES['product_img1']['tmp_name'];
   move_uploaded_file( $_FILES['product_img1']['tmp_name'],"../uploads/".$_FILES['product_img1']['name']);
   $product_img2 = $_FILES['product_img2']['name'];
   $product_img2_tmp = $_FILES['product_img2']['tmp_name'];
   move_uploaded_file( $_FILES['product_img2']['tmp_name'],"../uploads/".$_FILES['product_img2']['name']);
   $product_img3 = $_FILES['product_img3']['name'];
   $product_img3_tmp = $_FILES['product_img3']['tmp_name'];
   move_uploaded_file( $_FILES['product_img3']['tmp_name'],"../uploads/".$_FILES['product_img3']['name']);
   $product_desc = $_POST['product_desc'];
    //Kết nối DB
    include '../connect/open-connect.php';
    //sql
    $sql = "UPDATE product_detail SET product_id = '$product_id', color_id ='$color_id', size_id = '$size_id',
    price = '$price', quantity = '$quantity', product_img = '$product_img', product_img1 = '$product_img1', product_img2 = '$product_img2'
    , product_img3 = '$product_img3', product_desc = '$product_desc' WHERE product_detail_id = $product_detail_id";
    mysqli_query($connect, $sql);
    include '../connect/close-connect.php';
    header("location:product_detail_list.php");
?>