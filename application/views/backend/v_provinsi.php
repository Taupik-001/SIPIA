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
            <li class="active"><a href="#">Provinsi</a></li>
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
                        <table id="myTable" class="table table-bordered table-hover">

                            <h2> DATA PROVINSI </h2>
                            <a href="<?= base_url('provinsi/input'); ?>"><button class="btn btn-warning">Input Provinsi</button></a>
                            <hr>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>FOTO</th>
                                    <th>NAMA PROVINSI</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($provinsi as $s) {
                                ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>

                                        <td>
                                            <img src="<?= base_url('assets/images/provinsi/'); ?><?= $s->foto ?>" alt="" width='60' height='63'>
                                        </td>

                                        <td>
                                            <?= $s->nama_provinsi ?>
                                        </td>

                                        <td>
                                            <a href="<?= base_url('provinsi/edit/') . $s->id; ?>">
                                            <button class="btn btn-primary">
                                            <i class="fi fi-rr-pen-clip"></i>
                                            </button>
                                        </a>
                                            <a href="<?= base_url('provinsi/hapus/') . $s->id; ?>">
                                            <button class="btn btn-danger">
                                            <i class="fi fi-rr-trash"></i>
                                            </button>
                                        </a>
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