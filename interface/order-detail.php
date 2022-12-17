<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:login.php');
}
else{
$user_id = $_SESSION['user_id'];
$order_date = date('Y-m-d');
$status = 0;
$recipient_name = $_SESSION['recipient_name'];
$local = $_SESSION['local'];
$phonenumber = $_SESSION['phonenumber'];
  
include_once "../admin/connect/open-connect.php";

$sql = "INSERT INTO orders(user_id, order_date, status, recipient_name, local, phonenumber) 
    VALUES ('$user_id', '$order_date', '$status', '$recipient_name', '$local', '$phonenumber')";
    mysqli_query($connect, $sql);  
 

        $sql_order_id = "SELECT MAX(order_id) as order_max FROM orders WHERE user_id = '$user_id'";
        $result_order_id = mysqli_query($connect, $sql_order_id);
        foreach ($result_order_id as $each_order_id){
            $order_id = $each_order_id['order_max'];
        }
        $tong_tien = 0;
        $gio_hang = $_SESSION['gio_hang'];
        foreach ($gio_hang as $product_detail_id => $so_luong){
            $sql_detail_product = "SELECT product_detail.*, product.product_name, color.color_name, size.size_name
            FROM product_detail
            INNER JOIN product
            ON product_detail.product_id = product.product_id  
            INNER JOIN color
            ON product_detail.color_id = color.color_id
            INNER JOIN size
            ON product_detail.size_id = size.size_id
            WHERE product_detail_id = $product_detail_id";
            $result_detail_product = mysqli_query($connect, $sql_detail_product);
            foreach ($result_detail_product as $each_detail_product){
                $quantity = $so_luong;
                $thanh_tien = $each_detail_product['price'] * $so_luong;
                $money = $thanh_tien;
                //$money += $thanh_tien;
            }
            $sql_insert_hdct = "INSERT INTO order_detail(order_id, product_detail_id, quantity, money) 
             VALUES ('$order_id', '$product_detail_id', '$quantity', '$money')";
            mysqli_query($connect, $sql_insert_hdct);

            $quantity_new = $each_detail_product['quantity']-$so_luong;
            $sql_ct = "UPDATE product_detail
            SET quantity = '$quantity_new' WHERE product_detail_id = $product_detail_id";
            mysqli_query($connect, $sql_ct);
        }
    
        unset($_SESSION['gio_hang']);
    include_once "../admin/connect/close-connect.php";
    header('location:finish.php');
    }
?>