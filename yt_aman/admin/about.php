<?php
include "connect.php";
include "auth.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Pages | About</title>

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

    <style>
        #img_url {
            background: #ddd;
            width: 125px;
            height: auto;
            display: block;
        }
    </style>
</head>

<body>
    <!-- header -->
    <?php include "layouts/header.php"; ?>

    <!-- sidebar -->
    <?php include "layouts/sidebar.php"; ?>


    <!-- Workspace -->
    <main class="workspace overflow-hidden">

        <!-- Breadcrumb -->
        <section class="breadcrumb lg:flex items-start">
            <div>
                <h1>About</h1>
                <ul>
                    <li><a href="#">Pages</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </section>

        <div style="margin-bottom: 20px;"></div>



        <!-- List -->
        <div class="card p-5">
            <div class="overflow-x-auto">
                <table class="table table-auto table_hoverable w-full">
                    <thead>
                        <tr>

                            <!-- <th class="text-center uppercase">Id</th> -->
                            <th class="text-center uppercase">Name</th>
                            <th class="text-center uppercase">Designation</th>
                            <th class="rtl:text-right uppercase">Synopsis</th>
                            <th class="text-center uppercase">Image</th>
                            <th class="text-center uppercase">Updated At</th>
                            <th class="text-center uppercase">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <!-- <td class="text-center"><?= $id ?></td> -->
                            <td class="text-center"><?= $fname.' '.$lname ?></td>
                            <td class="text-center"><?= $designation ?></td>
                            <td class="text-center"><?php  echo substr($synopsis, 0,30).'...' ?></td>
                            <td></td>
                            <!-- <td class="text-center"><img width="100px" src="../assets/img/slider/<?= $img_name ?>" alt="<?= $img_name ?>"></td> -->
                            <td class="text-center"><?= $updated_at ?></td>

                            <!-- Action Button -->
                            <td class="ltr:text-right rtl:text-left whitespace-nowrap">
                                <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                                    <a href="#" class="btn btn-icon btn_outlined btn_secondary" data-toggle="modal" data-target="#edithomedata">
                                        <span class="la la-pen-fancy"></span>
                                    </a>


                                    <!-- edit data -->
                                    <div id="edithomedata" class="modal" data-animations="fadeInDown, fadeOutUp">
                                        <div class="modal-dialog modal-dialog_centered max-w-2xl">
                                            <div class="modal-content">
                                                <div class="modal-content">
                                                    <form method="post" action="action.php" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <h2 class="modal-title">Edit Data</h2>
                                                            <button type="button" class="close la la-times" data-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="input-group mt-5">
                                                                <div class="input-addon input-addon-prepend input-group-item">First and last name</div>
                                                                <input name="fname" class="form-control input-group-item" value="<?= $fname; ?>" placeholder="<?= $fname; ?>">
                                                                <input name="lname" class="form-control input-group-item" value="<?= $lname; ?>" placeholder="<?= $lname; ?>">
                                                            </div>
                                                            <div class="relative mt-5">
                                                                <label class="label absolute block bg-input border border-border rounded top-0 ltr:ml-4 rtl:mr-4 px-2 font-heading" for="input-2">Designation</label>
                                                                <input name="designation" class="form-control mt-2 pt-5" placeholder="<?= $designation; ?>" value="<?= $designation; ?>">
                                                            </div>
                                                            <div class="mt-3">
                                                                <div class="mt-5">
                                                                    <textarea name="synopsis" class="form-control" rows="5"><?= $synopsis; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="mt-5">
                                                                <label class="input-group font-normal">
                                                                    <div class="file-name input-addon input-addon-prepend input-group-item w-full overflow-x-hidden">
                                                                        No file chosen</div>


                                                                    <br>
                                                                    <input type="file" id="img_file" name="image" class="hidden" onChange="img_pathUrl(this);">
                                                                    <div class="input-group-item btn btn_primary uppercase">Choose File</div>

                                                                </label>
                                                            </div>
                                                            <div class="mt-5">

                                                                <img src="../assets/img/slider/<?= $img_name ?>" id="img_url" alt="your image">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="flex ltr:ml-auto rtl:mr-auto">
                                                                <button type="button" class="btn btn_secondary uppercase" data-dismiss="modal">Close</button>
                                                                <button type="submit" name="edit_about_1" class="btn btn_primary ltr:ml-2 rtl:mr-2 uppercase">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div style="margin-bottom: 20px;"></div>

        <!-- List -->
        <div class="card p-5">
            <div class="overflow-x-auto">
                <table class="table table-auto table_hoverable w-full">
                    <thead>
                        <tr>

                            <th class="text-center uppercase">DOB</th>
                            <th class="text-center uppercase">Age</th>
                            <th class="text-center uppercase">Address</th>
                            <th class="text-center uppercase">Email</th>
                            <th class="text-center uppercase">Phone</th>
                            <th class="text-center uppercase">Updated At</th>
                            <th class="text-center uppercase">Action</th>

                            <th class="uppercase"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $sql = "SELECT * FROM user";
                        $res = mysqli_query($conn, $sql);


                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) { ?>
                                <tr>
                                    <td class="text-center"><?= $row['dob']; ?></td>
                                    <td class="text-center"><?= $row['age']; ?></td>
                                    <td class="text-center"><?= $row['address']; ?></td>
                                    <td class="text-center"><?= $row['email']; ?></td>
                                    <td class="text-center">+91 <?= $row['phone']; ?></td>
                                    <td class="text-center"><?= $row['updated_at']; ?></td>
                                    <td class="ltr:text-right rtl:text-left whitespace-nowrap">
                                        <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                                            <a href="#" class="btn btn-icon btn_outlined btn_secondary" data-toggle="modal" data-target="#exampleModaledit<?= $row['id']; ?>">
                                                <span class=" la la-pen-fancy"></span>
                                            </a>

                                            <!-- add new data -->
                                            <div id="exampleModaledit<?= $row['id']; ?>" class="modal" data-animations="fadeInDown, fadeOutUp">
                                                <div class="modal-dialog modal-dialog_centered max-w-2xl">
                                                    <div class="modal-content">
                                                        <form method="post" action="action.php" enctype="multipart/form-data">
                                                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Edit Data</h2>
                                                                <button type="button" class="close la la-times" data-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="input-group mt-5">
                                                                    <div class="input-addon input-addon-prepend input-group-item">DOB : </div>
                                                                    <input name="dob" value="<?= $row['dob']; ?>" class="form-control input-group-item" placeholder="<?= $row['dob']; ?>">
                                                                </div>

                                                                <div class="input-group mt-5">
                                                                    <div class="input-addon input-addon-prepend input-group-item">Age : </div>
                                                                    <input name="age" value="<?= $row['age']; ?>" class="form-control input-group-item" placeholder="<?= $row['age']; ?>">
                                                                </div>

                                                                <div class="input-group mt-5">
                                                                    <div class="input-addon input-addon-prepend input-group-item">Address : </div>
                                                                    <input name="address" value="<?= $row['address']; ?>" class="form-control input-group-item" placeholder="<?= $row['address']; ?>">
                                                                </div>

                                                                <div class="input-group mt-5">
                                                                    <div class="input-addon input-addon-prepend input-group-item">Email : </div>
                                                                    <input name="email" value="<?= $row['email']; ?>" class="form-control input-group-item" placeholder="<?= $row['email']; ?>">
                                                                </div>

                                                                <div class="input-group mt-5">
                                                                    <div class="input-addon input-addon-prepend input-group-item">Phone : </div>
                                                                    <input name="phone" value="<?= $row['phone']; ?>" class="form-control input-group-item" placeholder="<?= $row['phone']; ?>">
                                                                </div>

                                                                <div class="mt-5">
                                                                    <label class="switch switch_outlined">
                                                                        <?php
                                                                        if ($row['status'] == 'active') { ?>
                                                                            <input type="checkbox" value="<?= $row['status'] ?>" name="status" checked>

                                                                        <?php } else { ?>
                                                                            <input type="checkbox" value="<?= $row['status'] ?>" name="status">

                                                                        <?php }
                                                                        ?>

                                                                        <span></span>
                                                                        <span>Published </span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">

                                                                <div class="flex ltr:ml-auto rtl:mr-auto">
                                                                    <button type="button" class="btn btn_secondary uppercase" data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="edit_about_2" class="btn btn_primary ltr:ml-2 rtl:mr-2 uppercase">Save</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </td>
                                </tr>
                        <?php }
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer -->
        <?php include "layouts/footer.php"; ?>

    </main>

    <!-- Scripts -->
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- show image -->
    <script>
        function img_pathUrl(input) {
            $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
        }
    </script>

</body>

</html>