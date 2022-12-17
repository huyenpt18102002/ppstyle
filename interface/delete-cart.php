<?php
    session_start();
    $product_detail_id = $_GET['product_detail_id'];
    unset($_SESSION['gio_hang'][$product_detail_id]);
    header('location:cart.php');
?>