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
            <li class="active"><a href="<?= base_url('hotel'); ?>">Hotel</a></li>
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

                            <h2> DATA HOTEL </h2>
                            <a href="<?= base_url('hotel/input'); ?>"><button class="btn btn-warning">Input Hotel</button></a>
                            <hr>
                            <thead>
                                <tr>
                                    <th class="col-md-0">NO</th>
                                    <th class="col-md-1">FOTO</th>
                                    <th class="col-md-2">NAMA HOTEL</th>
                                    <th class="col-md-7">ALAMAT</th>
                                    <th class="col-md-2">AKSI</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($hotel as $s) {
                                ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>

                                        <td>
                                            <img src="<?= base_url('assets/images/hotel/'); ?><?= $s->foto ?>" alt="" width="100" height="60">
                                        </td>

                                        <td>
                                            <?= $s->nama_hotel ?>
                                        </td>

                                        <td>
                                            <?= $s->alamat ?>
                                        </td>

                                        <td>
                                            <a href="<?= base_url('hotel/edit/') . $s->id; ?>">
                                                <button class="btn btn-primary">
                                                    <i class="fi fi-rr-pen-clip"></i>
                                                </button>
                                            </a>
                                            <a href="<?= base_url('hotel/hapus/') . $s->id; ?>">
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