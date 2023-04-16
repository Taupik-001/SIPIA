<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('assets/admin/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Taupik</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li class="active"><a href="<?php echo base_url() . 'dashboard'; ?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo base_url() . 'wisata'; ?>"><i class="fa fa-suitcase"></i> <span>Wisata</span></a></li>

            <li><a href="<?php echo base_url() . 'hotel'; ?>"><i class="fa fa-hotel"></i> <span>Hotel</span></a></li>

            <li><a href="<?php echo base_url() . 'kuliner'; ?>"><i class="fa fa-cutlery"></i> <span>Kuliner</span></a></li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url() . 'provinsi'; ?>"><i class="fa fa-circle-o"></i>Provinsi</a></li>
                    <li><a href="<?php echo base_url() . 'kabupaten_kota/kabupaten'; ?>"><i class="fa fa-circle-o"></i>Kabupaten</a></li>
                    <li><a href="<?php echo base_url() . 'kabupaten_kota/kota'; ?>"><i class="fa fa-circle-o"></i>Kota</a></li>
                    <li><a href="<?php echo base_url() . 'user'; ?>"><i class="fa fa-circle-o"></i>Pengguna</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header. Contains Page header -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </ol>
    </section>
    <!-- End Content Header. Contains Page header -->

    <!-- Main content -->
    <section class="content">

        <!-- Row Content -->
        <div class="row">

            <!-- Col Content -->
            <div class="col-xs-12">

                <!-- Box Content -->
                <div class="box">

                    <!-- Box Body -->
                    <div class="box-body">
                        <div class="row">

                            <!-- Wisata -->
                            <div class="col-lg-4 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-aqua">
                                    <div class="inner">
                                        <h3><?= $wisata_count; ?></h3>

                                        <p>Wisata</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>


                            <!-- ./col -->
                            <div class="col-lg-4 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3>
                                            <?= $hotel_count; ?>
                                            <sup style="font-size: 20px"></sup>
                                        </h3>
                                        <p>Hotel</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>


                            <!-- ./col -->
                            <div class="col-lg-4 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3><?= $kuliner_count; ?></h3>
                                        <p>Kuliner</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>


                            <!-- ./col -->
                            <div class="col-lg-4 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3><?= $provinsi_count; ?></h3>
                                        <p>Provinsi</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>


                            <div class="col-lg-4 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3><?= $kabupaten_count; ?></h3>
                                        <p>Kabupaten</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>


                            <div class="col-lg-4 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3><?= $kota_count; ?></h3>
                                        <p>Kota</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>

                    </div>
                    <!-- End Box Body -->

                </div>
                <!-- End Box Content -->

            </div>
            <!-- End Col Content -->

        </div>
        <!--End Row Content -->

    </section>
    <!-- End Main content -->

</div>
<!-- End Content Wrapper. Contains page content -->
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': true
        })
    })
</script>