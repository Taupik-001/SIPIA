<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/images/icon/'); ?>Icon.png">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>bower_components/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>bower_components/Ionicons/css/ionicons.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>dist/css/AdminLTE.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>dist/css/skins/_all-skins.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Flaticon -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>

<body class="hold-transition skin-yellow sidebar-mini">
    <div class="wrapper">
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
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Data');
                data.addColumn('number', 'Total');
                data.addColumn({
                    type: 'string',
                    role: 'annotation'
                });

                data.addRows([
                    ['Total Wisata', 100, '100'],
                    ['Total Hotel', 100, '100'],
                    ['Total Kuliner', 100, '100'],
                    ['Total Provinsi', 100, '100'],
                    ['Total Kabupaten', 100, '100'],
                    ['Total Kota', 100, '100']
                ]);

                var options = {
                    title: 'Data Overview',
                    legend: {
                        position: 'none'
                    },
                    annotations: {
                        textStyle: {
                            fontSize: 12,
                            color: 'black',
                            bold: true
                        }
                    },
                    isStacked: true,
                    series: {
                        0: {
                            color: 'rgb(50, 50, 255)',
                            annotations: {
                                alwaysOutside: true
                            }
                        }
                    }
                };

                var chart = new google.visualization.ColumnChart(document.getElementById('Chart1'));

                chart.draw(data, options);
            }
        </script>

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
                                    <!-- small box -->
                                    <div class="col-12 col-lg-12">
                                        <div id="Chart1" style="width: 550px; height: 350px;"></div>
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
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2023 <a href="https://bilab.online/sipia">SIPIa</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/admin/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/admin/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url('assets/admin/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?= base_url('assets/admin/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/admin/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/admin/'); ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/admin/'); ?>dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $('#myTable').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': true
            })
        })
    </script>
</body>

</html>