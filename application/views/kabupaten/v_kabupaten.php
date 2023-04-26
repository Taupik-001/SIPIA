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
            <li class="active"><a href="<?= base_url('kabupaten'); ?>">Kabupaten</a></li>
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

                            <h2> DATA KABUPATEN </h2>
                            <a href="<?= base_url('kabupaten/input'); ?>"><button class="btn btn-warning">Input Kabupaten</button></a>
                            <hr>
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
                                            <img src="<?= base_url('assets/images/kabupaten/'); ?><?= $s->foto ?>" alt="" width='100' height='60'>
                                        </td>

                                        <td>
                                            <?= $s->nama_kabupaten_kota ?>
                                        </td>

                                        <td>
                                            <a href="<?= base_url('kabupaten/edit/') . $s->id; ?>">
                                                <button class="btn btn-primary">
                                                    <i class="fi fi-rr-pen-clip"></i>
                                                </button>
                                            </a>
                                            <a href="<?= base_url('kabupaten/hapus/') . $s->id; ?>">
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