<?php

include "connect.php";
include "auth.php";

date_default_timezone_set("asia/kolkata");

// Edit Home Basic Details 
if (isset($_POST['edit_home_BD'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $synopsis = $_POST['synopsis'];
    $updated_at = date("d-m-Y h:i:s");
    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    // echo '<pre>';
    // print_r($_POST);
    // echo 'Updated AT : ' . $updated_at . '<br>';
    // print_r($_FILES['image']);
    // echo "</pre>";
    // die;

    if ($error === 0) {

        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png");

        if (in_array($img_ex_lc, $allowed_exs)) {

            $time_stamp = date("Ymd-his");
            $new_img_name = "IMG-" . $time_stamp . '.' . $img_ex_lc;
            move_uploaded_file($tmp_name, 'assets/images/' . $new_img_name);

            $img_path = 'assets/images/' . $new_img_name;

            // Insert into Database

            $update_data = "UPDATE `user` SET `fname`='$fname',`lname`='$lname', `synopsis`='$synopsis',`img_name`='$new_img_name',`img_path`='$img_path',`updated_at`='$updated_at' WHERE 1";
            $check_sql = mysqli_query($conn, $update_data);

            if ($check_sql) {
                $_SESSION['error_msg'] = 'Edit Successfully';
                header("Location: home.php");
            }
        } else {
            $_SESSION['error_msg'] = 'Error : File extension not allowed..!';
            header("Location: home.php");
        }
    } else {
        $update_data = "UPDATE `user` SET `fname`='$fname',`lname`='$lname', `synopsis`='$synopsis',`updated_at`='$updated_at' WHERE 1";
        $check_sql = mysqli_query($conn, $update_data);

        if ($check_sql) {
            $_SESSION['error_msg'] = 'Edit Successfully';
            header("Location: home.php");
        }
    }
}
if (isset($_POST['add_home_SM'])) {

    $platform = $_POST['platform'];
    $link = $_POST['link'];
    if ($_POST['status'] == 'on') {
        $status = 'active';
    } else {
        $status = 'inactive';
    }
    $created_at = date("d-m-Y h:i:s");
    $updated_at = date("d-m-Y h:i:s");

    // echo '<pre>';
    // print_r($_POST);
    // die;

    $insert_data = "INSERT INTO `social_media`(`platform`, `link`, `status`, `created_at`, `updated_at`) VALUES ('$platform','$link','$status','$created_at','$updated_at')";
    $check_sql = mysqli_query($conn, $insert_data);
    if ($check_sql) {
        $_SESSION['error_msg'] = 'Added Successfully';
        header("Location: home.php");
    }
}
