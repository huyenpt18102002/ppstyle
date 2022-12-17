<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('location:login.php');
    }
    else{
    $user_id = $_SESSION['user_id'];
    $order_date = date('Y-m-d');
    $status = 0;
    $_SESSION['recipient_name'] = $_POST['recipient_name'];;
    $_SESSION['local'] = $_POST['local'];;
    $_SESSION['phonenumber'] = $_POST['phonenumber'];;

    header('location:payment.php');
}

?>