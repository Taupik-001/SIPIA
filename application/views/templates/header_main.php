 <header class="main-header">
     <!-- Logo -->
     <a href="<?= base_url('assets/admin/'); ?>index2.html" class="logo">
         <!-- mini logo for sidebar mini 50x50 pixels -->
         <span class="logo-mini"><b>SIPI</b>a</span>
         <!-- logo for regular state and mobile devices -->
         <span class="logo-lg"><b>SIPI</b>a</span>
     </a>
     <!-- End of Logo -->

     <!-- Header -->
     <nav class="navbar navbar-static-top">
         <!-- Sidebar toggle button-->
         <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </a>

         <div class="navbar-custom-menu">
             <ul class="nav navbar-nav">
                 <!-- User Account: style can be found in dropdown.less -->
                 <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         <img src="<?= base_url('assets/admin/'); ?>dist/img/photo4.jpg" class="user-image" alt="User Image">
                         <span class="hidden-xs"><?= $nama ?></span>
                     </a>
                     <ul class="dropdown-menu">
                         <!-- User image -->
                         <li class="user-header">
                             <img src="<?= base_url('assets/admin/'); ?>dist/img/photo4.jpg" class="img-circle" alt="User Image">

                             <p>
                                 <?= $nama ?> - Web Developer
                                 <small>Member since Mar. 2023</small>
                             </p>
                         </li>
                         <!-- Menu Body -->
                         <li class="user-body">
                             <div class="row">
                                 <div class="col-xs-4 text-center">
                                     <a href="#">Followers</a>
                                 </div>
                                 <div class="col-xs-4 text-center">
                                     <a href="#">Sales</a>
                                 </div>
                                 <div class="col-xs-4 text-center">
                                     <a href="#">Friends</a>
                                 </div>
                             </div>
                             <!-- /.row -->
                         </li>
                         <!-- Menu Footer-->
                         <li class="user-footer">
                             <div class="pull-left">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                             </div>
                             <div class="pull-right">
                                 <a href="<?= base_url('dashboard/logout/'); ?>" class="btn btn-default btn-flat">Sign out</a>
                             </div>
                         </li>
                     </ul>
                 </li>
             </ul>
         </div>
     </nav>
     <!-- End of Header -->
 </header>