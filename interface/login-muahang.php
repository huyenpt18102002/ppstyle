<?php     session_start();
    if(!isset($_SESSION['user_id'])){
        include "notice-login-muahang.php";   
    }
    else{
        header('location:delivery.php');
    }
        ?>