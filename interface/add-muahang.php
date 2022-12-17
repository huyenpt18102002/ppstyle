<?php
    session_start();
    $product_detail_id = $_GET['product_detail_id'];
    if(isset($_SESSION['gio_hang'])){
        if(isset($_SESSION['gio_hang'][$product_detail_id])){
            $_SESSION['gio_hang'][$product_detail_id]++;
        }
        else {
            $_SESSION['gio_hang'][$product_detail_id] = 1;
        }
    }
    else {
        $_SESSION['gio_hang'][$product_detail_id] = 1;
    }
    foreach ($gio_hang as $product_detail_id => $so_luong){
        $_SESSION['gio_hang'][$product_detail_id] = $so_luong;
    }
    header('location:muahang.php');
?>