<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Login - yt aman</title>

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

    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        .error_msg {
            color: #f11;
            font-family: cursive;
            text-align: right;
            margin-right: 9px;
        }

        .label_error {
            font-size: 13px;
            font-weight: 100;
        }
    </style>
</head>

<body>


    <!-- Top Bar -->
    <section class="top-bar">

        <!-- Brand -->
        <span class="brand">admin panel</span>

        <nav class="flex items-center ltr:ml-auto rtl:mr-auto">

            <!-- Dark Mode -->
            <label class="switch switch_outlined" data-toggle="tooltip" data-tippy-content="Toggle Dark Mode">
                <input id="darkModeToggler" type="checkbox">
                <span></span>
            </label>

            <!-- Fullscreen -->
            <button id="fullScreenToggler" class="hidden lg:inline-block ltr:ml-5 rtl:mr-5 text-2xl leading-none la la-expand-arrows-alt" data-toggle="tooltip" data-tippy-content="Fullscreen"></button>

            <!-- Register -->
            <a href="#" class="btn btn_primary uppercase ltr:ml-5 rtl:mr-5">Register</a>
        </nav>
    </section>

    <div class="container flex items-center justify-center mt-20 py-10">
        <div class="w-full md:w-1/2 xl:w-1/3">
            <div class="mx-5 md:mx-10">
                <h3 class="uppercase">Login Here</h3>
            </div>
            <form class="card mt-5 p-5 md:p-10" action="login_action.php" method="post">
                <div class="mb-5">
                    <label class="label block mb-2" for="email">Email</label>
                    <input id="email" name="email" class="form-control" placeholder="example@example.com">
                    <?php
                    session_start();
                    if (isset($_SESSION['msg'])) {
                        if ($_SESSION['msg'] == 'email') {
                            echo '<div class="error_msg" id="error_msg"> 
                                    <label class="label block mb-2 label_error" for="error">Invalid Email </label>
                                    
                                </div>';
                            unset($_SESSION['msg']);
                        }
                    }
                    ?>
                </div>
                <div class="mb-5">
                    <label class="label block mb-2" for="password">Password</label>
                    <label class="form-control-addon-within">
                        <input id="password" name="password" type="password" class="form-control border-none" value="12345">
                        <span class="flex items-center ltr:pr-4 rtl:pl-4">
                            <button type="button" class="text-gray-300 dark:text-gray-700 la la-eye text-xl leading-none" data-toggle="password-visibility"></button>
                        </span>
                    </label>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        if ($_SESSION['msg'] == 'password') {
                            echo '<div class="error_msg" id="error_msg"> 
                                    <label class="label block mb-2 label_error" for="error">Wrong Password </label>
                                    
                                </div>';
                            unset($_SESSION['msg']);
                        }
                    }
                    ?>


                </div>
                <div class="flex items-center">
                    <a href="#" class="text-sm uppercase">Forgot Password?</a>
                    <button type="submit" name="submit" class="btn btn_primary ltr:ml-auto rtl:mr-auto uppercase">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
        $(document).ready(function() {
            $("#email").focusin(function() {
                $("#error_msg").hide();
            });
            $("#password").focusin(function() {
                $("#error_msg").hide();
            });

        });
    </script>
</body>

</html>