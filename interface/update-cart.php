<?php
    session_start();
    $gio_hang = $_POST['gio_hang'];
    foreach ($gio_hang as $product_detail_id => $so_luong){
        $_SESSION['gio_hang'][$product_detail_id] = $so_luong;
    }
    header('location:cart.php');
?>