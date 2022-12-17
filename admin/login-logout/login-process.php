<?php
    session_start();
    $admin_name = $_POST['admin_name'];
    $password = $_POST['password'];
    include_once "../connect/open-connect.php";
    $sql = "SELECT *, COUNT(admin_id) AS so_admin FROM admin WHERE admin_name = '$admin_name' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
    foreach ($result as $each){
        if($each['so_admin'] == 0){
            header('location:login.php');
        }
        else {
            $_SESSION['admin_id'] = $each['admin_id'];
            header('location:../index.php');
        }
    }
?>