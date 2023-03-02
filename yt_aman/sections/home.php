<?php
$user_sql = "SELECT * FROM user";
$user_res = mysqli_query($conn, $user_sql);


if (mysqli_num_rows($user_res) > 0) {
    while ($user = mysqli_fetch_assoc($user_res)) {
        $id = $user['id'];
        $fname = $user['fname'];
        $lname = $user['lname'];
        // *user data
        $name = $fname . ' ' . $lname;
        $short_name = substr($fname, 0, 1) . substr($lname, 0, 1);
        $designation = $user['designation'];
        $synopsis = $user['synopsis'];
        $img_name = $user['img_name'];
        $updated_at = $user['updated_at'];
    }
}
$social_media_sql = "SELECT * FROM social_media";
$social_media_res = mysqli_query($conn, $social_media_sql);


?>






<!-- start -->
<div id="home" class="tokyo_tm_section animated">
    <div class="container">
        <div class="tokyo_tm_home w-full min-h-[100vh] clear-both flex items-center justify-center relative">
            <div class="home_content flex items-center">
                <div class="avatar min-w-[300px] min-h-[300px] relative rounded-full" data-type="wave">

                    <!-- Add Picture -->
                    <div class="image absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="assets/img/slider/<?= $img_name ?>"></div>
                </div>
                <div class="details ml-[80px]">

                    <!-- Add Details -->
                    <h3 class="name text-[55px] font-extrabold uppercase mb-[14px]"><?= $fname ?> <span><?= $lname ?></span></h3>
                    <p class="job font-montserrat font-medium max-w-[450px] mb-[25px]"><?= $synopsis ?></p>
                    <div class="social w-full float-left">
                        <ul class="m-0 list-none">
                            <?php
                            if (mysqli_num_rows($social_media_res) > 0) {
                                while ($social_media = mysqli_fetch_assoc($social_media_res)) {
                                    if ($social_media['status'] == 'active') { ?>
                                        <li class="mr-[8px] inline-block">
                                            <a class="text-black text-[20px] transition-all duration-300 hover:text-black" href="<?= $social_media['link'] ?>">
                                                <i class="icon-<?= $social_media['platform'] ?>-squared"></i>
                                            </a>
                                        </li>
                            <?php
                                    }
                                }
                            }

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->