<?php
include "connect.php";
session_start();
extract($_POST);

// *test mode
// echo '<pre>';
// print_r($_POST);
// die;



if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $password = md5($password);



    $email_query = "SELECT * FROM `user` WHERE `email` = '$email'";
    $check_email = mysqli_query($conn, $email_query);


    if (mysqli_num_rows($check_email) == 1) {

        $second_query = "SELECT * FROM `user` WHERE `password` = '$password'";
        $check_password = mysqli_query($conn, $second_query);

        if (mysqli_num_rows($check_password) == 1) {

            $user = mysqli_fetch_assoc($check_password);
            $_SESSION['user_id'] = $user['id'];
            header("location: index.php");
        } else {
            $_SESSION['msg'] = 'password';
            header("location: login.php");
        }
    } else {
        $_SESSION['msg'] = 'email';
        header("location: login.php");
    }
} else {
    header("location: index.php");
}
