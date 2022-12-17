<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    include_once "../admin/connect/open-connect.php";
    $sql = "SELECT *, COUNT(user_id) AS so_user FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
    foreach ($result as $each_user) {
        if($each_user['so_user'] == 0){
            header('location:login-error.php');
        }
        else {
            $_SESSION['user_id'] = $each_user['user_id'];
            header('location:delivery.php');
        }
    }
?>