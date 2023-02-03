<!-- Top Bar -->
<header class="top-bar">

    <!-- Menu Toggler -->
    <button class="menu-toggler la la-bars" data-toggle="menu"></button>

    <!-- Brand -->
    <!-- <span class="brand">yt aman</span> -->

    <!-- Right -->
    <div class="flex items-center ltr:ml-auto rtl:mr-auto">

        <!-- Dark Mode -->
        <label class="switch switch_outlined" data-toggle="tooltip" data-tippy-content="Toggle Dark Mode">
            <input id="darkModeToggler" type="checkbox">
            <span></span>
        </label>

        <!-- Fullscreen -->
        <button id="fullScreenToggler" class="hidden lg:inline-block ltr:ml-3 rtl:mr-3 px-2 text-2xl leading-none la la-expand-arrows-alt" data-toggle="tooltip" data-tippy-content="Fullscreen"></button>


        <?php
        $sql = "SELECT * FROM user";
        $res = mysqli_query($conn, $sql);


        if (mysqli_num_rows($res) > 0) {
            while ($user = mysqli_fetch_assoc($res)) {
                $id = $user['id'];
                $fname = $user['fname'];
                $lname = $user['lname'];
                // *user data
                $name = $fname . ' ' . $lname;
                $short_name = substr($fname, 0, 1) . substr($lname, 0, 1);
                $skill = $user['skill'];
                $synopsis = $user['synopsis'];
                $img_name = $user['img_name'];
                $updated_at = $user['updated_at'];
            }
        } ?>

        <!-- User Menu -->
        <div class="dropdown">
            <button class="flex items-center ltr:ml-4 rtl:mr-4" data-toggle="custom-dropdown-menu" data-tippy-arrow="true" data-tippy-placement="bottom-end">
                <span class="avatar"><?= ucwords($short_name) ?></span>
            </button>
            <div class="custom-dropdown-menu w-64">
                <div class="p-5">
                    <h5 class="uppercase"><?= $name ?></h5>
                    <p><?= ucwords($skill) ?></p>
                </div>
                <hr>
                <div class="p-5">
                    <a href="#no-link" class="flex items-center text-normal hover:text-primary">
                        <span class="la la-user-circle text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                        View Profile
                    </a>
                    <a href="#no-link" class="flex items-center text-normal hover:text-primary mt-5">
                        <span class="la la-key text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                        Change Password
                    </a>
                </div>
                <hr>
                <div class="p-5">
                    <form method="post">
                        <button type="submit" name="logout">
                            <a class="flex items-center text-normal hover:text-primary">
                                <span class="la la-power-off text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                                Logout
                            </a>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</header>