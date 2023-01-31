<?php

include "connect.php";
include "auth.php";

date_default_timezone_set("asia/kolkata");

// upload image 
if (isset($_POST['add_home_BD'])) {

    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES['image']);
    // echo "</pre>";
    // die;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $synopsis = $_POST['synopsis'];
    if ($_POST['published'] == 'on') {
        $status = 'PUBLISHED';
    } else {
        $status = 'DRAFT';
    }
    $updated_at = date("d-m-Y h:i:s");
    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

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
            $insert_data = "INSERT INTO user( `fname`, `lname`, `synopsis`, `status`, `img_name`, `img_path`, `updated_at`) VALUES ('$fname','$lname','$synopsis', '$status','$new_img_name','$img_path','$updated_at')";
            $insert_image = mysqli_query($conn, $insert_data);

            if ($insert_image) {
                $_SESSION['error_msg'] = 'Add Image Successfully';
                header("Location: home.php");
            }
        } else {
            $_SESSION['error_msg'] = 'Error : File extension not allowed..!';
            header("Location: home.php");
        }
    } else {
        $em = "unknown error occurred!";
        header("Location: home.php?error=$em");
    }
}
