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
            move_uploaded_file($tmp_name, '../assets/img/slider/' . $new_img_name);

            $img_path = '../assets/img/slider/' . $new_img_name;

            // update into Database

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
// add home social media
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
// edit home social media
if (isset($_POST['edit_home_SM'])) {

    // get id
    $id = $_POST['id'];
    $platform = $_POST['platform'];
    $link = $_POST['link'];
    if (isset($_POST['status'])) {
        $status = 'active';
    } else {
        $status = 'inactive';
    }
    $updated_at = date("d-m-Y h:i:s");

    // echo '<pre>';
    // print_r($_POST);
    // echo $id;
    // die;

    $update_data = "UPDATE `social_media` SET `platform`='$platform',`link`='$link', `status`='$status',`updated_at`='$updated_at' WHERE `id` = $id";
    $check_sql = mysqli_query($conn, $update_data);

    if ($check_sql) {
        $_SESSION['error_msg'] = 'Added Successfully';
        header("Location: home.php");
    }
}
// delete home social media
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $del_data = "DELETE FROM `social_media` WHERE `id`= $id";
    $check_sql = mysqli_query($conn, $del_data);
    if ($check_sql) {
        $_SESSION['error_msg'] = 'Delete Successfully';
        header("Location: home.php");
    }
}


// about -- 
// Edit About 1 
if (isset($_POST['edit_about_1'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $designation = $_POST['designation'];
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
            move_uploaded_file($tmp_name, '../assets/img/slider/' . $new_img_name);

            $img_path = '../assets/img/slider/' . $new_img_name;

            // update into Database

            $update_data = "UPDATE `user` SET `fname`='$fname',`lname`='$lname', `designation`='$designation' , `synopsis`='$synopsis',`img_name`='$new_img_name',`img_path`='$img_path',`updated_at`='$updated_at' WHERE 1";
            $check_sql = mysqli_query($conn, $update_data);

            if ($check_sql) {
                $_SESSION['error_msg'] = 'Edit Successfully';
                header("Location: about.php");
            }
        } else {
            $_SESSION['error_msg'] = 'Error : File extension not allowed..!';
            header("Location: about.php");
        }
    } else {
        $update_data = "UPDATE `user` SET `fname`='$fname',`lname`='$lname', `designation`='$designation' , `synopsis`='$synopsis',`updated_at`='$updated_at' WHERE 1";
        $check_sql = mysqli_query($conn, $update_data);

        if ($check_sql) {
            $_SESSION['error_msg'] = 'Edit Successfully';
            header("Location: about.php");
        }
    }
}
// Edit About 2
if (isset($_POST['edit_about_2'])) {

    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $updated_at = date("d-m-Y h:i:s");
    

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
            move_uploaded_file($tmp_name, '../assets/img/slider/' . $new_img_name);

            $img_path = '../assets/img/slider/' . $new_img_name;

            // update into Database

            $update_data = "UPDATE `user` SET `fname`='$fname',`lname`='$lname', `designation`='$designation' , `synopsis`='$synopsis',`img_name`='$new_img_name',`img_path`='$img_path',`updated_at`='$updated_at' WHERE 1";
            $check_sql = mysqli_query($conn, $update_data);

            if ($check_sql) {
                $_SESSION['error_msg'] = 'Edit Successfully';
                header("Location: about.php");
            }
        } else {
            $_SESSION['error_msg'] = 'Error : File extension not allowed..!';
            header("Location: about.php");
        }
    } else {
        $update_data = "UPDATE `user` SET `fname`='$fname',`lname`='$lname', `designation`='$designation' , `synopsis`='$synopsis',`updated_at`='$updated_at' WHERE 1";
        $check_sql = mysqli_query($conn, $update_data);

        if ($check_sql) {
            $_SESSION['error_msg'] = 'Edit Successfully';
            header("Location: about.php");
        }
    }
}