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

            <li><a href="<?php echo base_url() . 'dashboard'; ?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo base_url() . 'wisata'; ?>"><i class="fa fa-suitcase"></i> <span>Wisata</span></a></li>

            <li><a href="<?php echo base_url() . 'hotel'; ?>"><i class="fa fa-hotel"></i> <span>Hotel</span></a></li>

            <li><a href="<?php echo base_url() . 'kuliner'; ?>"><i class="fa fa-cutlery"></i> <span>Kuliner</span></a></li>


            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url() . 'provinsi'; ?>"><i class="fa fa-circle-o"></i>Provinsi</a></li>
                    <li class="active"><a href="<?php echo base_url() . 'kabupaten_kota/kabupaten'; ?>"><i class="fa fa-circle-o"></i>Kabupaten</a></li>
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
            <li class="active"><a href="<?= base_url('kabupaten_kota'); ?>">Kabupaten</a></li>
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

                        <!-- Table Content -->
                        <table id="example2" class="table table-bordered table-hover">

                            <h2> DATA KABUPATEN </h2>
                            <a href="<?= base_url('kabupaten_kota/input'); ?>"><button class="btn btn-warning">Input Kabupaten</button></a>

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>FOTO</th>
                                    <th>NAMA KABUPATEN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kabupaten_kota as $s) {
                                ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>

                                        <td>
                                            <img src="<?= base_url('assets/images/kabupaten_kota/'); ?><?= $s->foto ?>" alt="" width='100' height='60'>
                                        </td>

                                        <td>
                                            <?= $s->nama_kabupaten_kota ?>
                                        </td>

                                        <td>
                                            <a href="<?= base_url('kabupaten_kota/edit/'). $s->id; ?>"><button class="btn btn-primary">Edit</button></a>
                                            <a href="<?= base_url('kabupaten_kota/hapus/'). $s->id; ?>"><button class="btn btn-danger">Hapus</button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                        <!-- End Table Content -->

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