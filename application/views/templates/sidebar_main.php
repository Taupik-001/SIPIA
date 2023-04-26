<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('assets/admin/'); ?>dist/img/photo4.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $nama ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <style>
            .marg {
                margin-top: 7px;
            }
        </style>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu marg" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li class="<?php if ($page == "Dashboard") {
                            echo "active";
                        } ?>"><a href="<?php echo base_url() . 'dashboard'; ?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
            <li class="<?php if ($page == "Wisata") {
                            echo "active";
                        } ?>"><a href="<?php echo base_url() . 'wisata'; ?>"><i class="fa fa-suitcase"></i> <span>Wisata</span></a></li>

            <li class="<?php if ($page == "Hotel") {
                            echo "active";
                        } ?>"><a href="<?php echo base_url() . 'hotel'; ?>"><i class="fa fa-hotel"></i> <span>Hotel</span></a></li>

            <li class="<?php if ($page == "Kuliner") {
                            echo "active";
                        } ?>"><a href="<?php echo base_url() . 'kuliner'; ?>"><i class="fa fa-cutlery"></i> <span>Kuliner</span></a></li>


            <li class="treeview <?php if ($pageTre == "Master") {
                                    echo "active";
                                } ?>">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($page == "Provinsi") {
                            echo "active";
                        } ?>">
                        <a href="<?php echo base_url() . 'provinsi'; ?>">
                            <i class="fa fa-circle-o"></i>
                            Provinsi
                        </a>
                    </li>
                    <li class="<?php if ($page == "Kabupaten") {
                            echo "active";
                        } ?>">
                        <a href="<?php echo base_url() . 'kabupaten'; ?>">
                            <i class="fa fa-circle-o"></i>
                            Kabupaten
                        </a>
                    </li>
                    <li class="<?php if ($page == "Kota") {
                            echo "active";
                        } ?>">
                        <a href="<?php echo base_url() . 'kota'; ?>">
                            <i class="fa fa-circle-o"></i>
                            Kota
                        </a>
                    </li>
                    <li class="<?php if ($page == "User") {
                            echo "active";
                        } ?>">
                        <a href="<?php echo base_url() . 'user'; ?>">
                            <i class="fa fa-circle-o"></i>
                            Pengguna
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>