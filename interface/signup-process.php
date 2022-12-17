<?php
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    //Kết nối DB
    include '../admin/connect/open-connect.php';
    //sql
    $sql = "INSERT INTO user(user_id, username, password, name, birthday, phonenumber, email) 
    VALUES ('$user_id', '$username', '$password', '$name', '$birthday', '$phonenumber', '$email')";
    mysqli_query($connect, $sql);
    include '../admin/connect/close-connect.php';
    header("location:signup-login.php");
    
?>