<?php
$db_host = "localhost";
$db_name = "root";
$db_password = "";
$db_table = "yt_aman";

$conn = mysqli_connect("localhost", "root", "", "yt_aman");

if (mysqli_connect_error()) {
    echo "<script> alert('Database Not Connected');</script>";
    exit();
}
