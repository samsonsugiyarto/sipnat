 <!-- Sidebar -->

 <style>
     /* Menambahkan sidebar scrollable */
     .sidebar {
         position: fixed;
         top: 0;
         bottom: 0;
         left: 0;
         z-index: 100;
         /* Behind the navbar */
         padding: 48px 0 0;
         /* Height of navbar */
         box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
     }

     .sidebar-sticky {
         position: relative;
         top: 0;
         height: calc(100vh - 48px);
         padding-top: .5rem;
         overflow-x: hidden;
         overflow-y: auto;
         /* Scrollable contents if viewport is shorter than content. */
     }

     @supports ((position: -webkit-sticky) or (position: sticky)) {
         .sidebar-sticky {
             position: -webkit-sticky;
             position: sticky;
         }
     }
 </style>


 <?php if ($namarole['id'] == 1 || $namarole['id'] == 2) :  ?>
     <ul class="navbar-nav bg-gradient-primary sidebar  sidebar-sticky  sidebar-dark accordion" id="accordionSidebar">
     <?php elseif ($namarole['id'] == 3) : ?>
         <ul class="navbar-nav  bg-gradient-danger sidebar sidebar-sticky sidebar-dark accordion" id="accordionSidebar">
         <?php elseif ($namarole['id'] == 4) : ?>
             <ul class="navbar-nav  bg-gradient-danger sidebar sidebar-sticky sidebar-dark accordion" id="accordionSidebar">
             <?php elseif ($namarole['id'] == 5) :  ?>
                 <ul class="navbar-nav  bg-gradient-danger  sidebar-sticky sidebar sidebar-dark  accordion" id="accordionSidebar">
                 <?php endif; ?>
                 <!-- Sidebar - Brand -->
                 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user'); ?>">
                     <div class="sidebar-brand-icon rotate-n-15 ">
                         <i class="fas fa-code"></i>
                     </div>
                     <div class="sidebar-brand-text mx-3"><?= $namarole['role']; ?> </div>
                 </a>

                 <!-- Divider -->
                 <hr class="sidebar-divider">

                 <!-- QUERY MENU -->

                 <?php
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "SELECT user_menu.id, menu
                        FROM user_menu JOIN user_access_menu
                          ON user_menu.id = user_access_menu.menu_id
                       WHERE user_access_menu.role_id = $role_id
                    ORDER BY user_menu.urutan_menu ASC
                     ";
                    $menu = $this->db->query($queryMenu)->result_array();

                    ?>


                 <!-- LOOPING MENU -->
                 <?php foreach ($menu as $m) : ?>
                     <div class="sidebar-heading">
                         <?= $m['menu']; ?>

                     </div>

                     <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                     <?php
                            $menuId = $m['id'];
                            $querySubMenu =  "SELECT *
                                FROM user_sub_menu JOIN user_menu
                                  ON user_sub_menu.menu_id = user_menu.id
                               WHERE user_sub_menu.menu_id = $menuId 
                                 AND user_sub_menu.is_active = 1
                                ";
                            $subMenu = $this->db->query($querySubMenu)->result_array();
                            ?>

                     <?php foreach ($subMenu as $sm) : ?>
                         <?php if ($title == $sm['title']) : ?>
                             <li class="nav-item active">
                             <?php else : ?>
                             <li class="nav-item ">
                             <?php endif; ?>
                             <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                                 <i class="<?= $sm['icon']; ?>"></i>
                                 <span><?= $sm['title']; ?></span></a>
                             </li>
                         <?php endforeach; ?>

                         <hr class="sidebar-divider mt-3">

                     <?php endforeach; ?>

                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                             <i class="fas  fa-fw fa-sign-out-alt"></i>
                             <span>Logout</span></a>
                     </li>
                     <!-- Divider -->
                     <hr class="sidebar-divider d-none d-md-block">

                     <!-- Sidebar Toggler (Sidebar) -->
                     <div class="text-center d-none d-md-inline">
                         <button class="rounded-circle border-0" id="sidebarToggle"></button>
                     </div>

                 </ul>



                 <!-- End of Sidebar -->