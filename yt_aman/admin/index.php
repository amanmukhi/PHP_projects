<?php
include "connect.php";
session_start();

include "auth.php";


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>yt aman | Dashboard</title>

    <!-- Generics -->
    <link rel="icon" href="assets/images/favicon/favicon-32.png" sizes="32x32">
    <link rel="icon" href="assets/images/favicon/favicon-128.png" sizes="128x128">
    <link rel="icon" href="assets/images/favicon/favicon-192.png" sizes="192x192">

    <!-- Android -->
    <link rel="shortcut icon" href="assets/images/favicon/favicon-196.png" sizes="196x196">

    <!-- iOS -->
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon-152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon-167.png" sizes="167x167">
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon-180.png" sizes="180x180">

    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <!-- header -->
    <?php include "layouts/header.php"; ?>

    <!-- sidebar -->
    <?php include "layouts/sidebar.php"; ?>

    <!-- customizer -->
    <?php include "layouts/customizer.php"; ?>

    <!-- Workspace -->
    <main class="workspace">

        <!-- Breadcrumb -->
        <section class="breadcrumb">
            <h1>Dashboard</h1>
            <ul>
                <li><a href="#no-link">Login</a></li>
                <li class="divider la la-arrow-right"></li>
                <li>Dashboard</li>
            </ul>
        </section>

        <div class="grid lg:grid-cols-2 gap-5">

            <!-- Summaries -->
            <div class="grid sm:grid-cols-3 gap-5">
                <div class="card px-4 py-8 flex justify-center items-center text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                    <div>
                        <span class="text-primary text-5xl leading-none la la-sun"></span>
                        <p class="mt-2">Published Posts</p>
                        <div class="text-primary mt-5 text-3xl leading-none">18</div>
                    </div>
                </div>
                <div class="card px-4 py-8 flex justify-center items-center text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                    <div>
                        <span class="text-primary text-5xl leading-none la la-cloud"></span>
                        <p class="mt-2">Pending Posts</p>
                        <div class="text-primary mt-5 text-3xl leading-none">16</div>
                    </div>
                </div>
                <div class="card px-4 py-8 flex justify-center items-center text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                    <div>
                        <span class="text-primary text-5xl leading-none la la-layer-group"></span>
                        <p class="mt-2">Categories</p>
                        <div class="text-primary mt-5 text-3xl leading-none">9</div>
                    </div>
                </div>
            </div>


        </div>

        <!-- footer -->
        <?php include "layouts/footer.php"; ?>

    </main>

    <!-- Scripts -->
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1"></script> -->
    <script src="assets/js/script.js"></script>

</body>

</html>