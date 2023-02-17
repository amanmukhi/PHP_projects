 <!-- Menu Bar -->
 <aside class="menu-bar menu-sticky">
     <div class="menu-items">
         <div class="menu-header hidden">
             <a href="index.php" class="flex items-center mx-8 mt-8">
                 <span class="avatar w-16 h-16"><?= ucwords($short_name) ?></span>
                 <div class="ltr:ml-4 rtl:mr-4 ltr:text-left rtl:text-right">
                     <h5><?= $name ?></h5>
                     <p class="mt-2"><?= ucwords($skill) ?></p>
                 </div>
             </a>
             <hr class="mx-8 my-4">
         </div>
         <a href="index.php" class="link" data-toggle="tooltip-menu" data-tippy-content="Dashboard">
             <span class="icon la la-laptop"></span>
             <span class="title">Dashboard</span>
         </a>
         <button class="link" data-target="[data-menu=pages]" data-toggle="tooltip-menu" data-tippy-content="Pages">
             <span class="icon la la-file-alt"></span>
             <span class="title">Pages</span>
         </button>

     </div>

     <!-- Pages -->
     <div class="menu-detail" data-menu="pages">
         <div class="menu-detail-wrapper">
             <h6 class="uppercase">Sections</h6>
             <a href="home.php">
                 <span class="la la-edit"></span>
                 Home
             </a>

             <a href="about.php">
                 <span class="la la-edit"></span>
                 About
             </a>

             <a href="#">
                 <span class="la la-edit"></span>
                 Service
             </a>

             <a href="#">
                 <span class="la la-edit"></span>
                 Portfolio
             </a>

             <a href="#">
                 <span class="la la-edit"></span>
                 News
             </a>

             <a href="#">
                 <span class="la la-edit"></span>
                 Contact
             </a>

         </div>
     </div>

 </aside>