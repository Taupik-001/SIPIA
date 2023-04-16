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
            <li class="active"><a href="<?= base_url('kabupaten_kota'); ?>">Kabupaten/Kota</a></li>
        </ol>
    </section>
    <!-- End Content Header. Contains Page header -->

    <!-- Main content -->
    <section class="content">

        <!-- Row Content -->
        <div class="row">

            <!-- Col Content -->
            <div class="col-xs-12 ">

                <!-- Box Content -->
                <div class="box">

                    <!-- Box Body -->
                    <div class="box-body">

                        <!-- Table Content -->
                        <table id="example2" class="table table-bordered table-hover">

                            <h2> DATA KABUPATEN/KOTA </h2>
                            <a href="<?= base_url('kabupaten_kota/input'); ?>"><button class="btn btn-warning">Input Kabupaten/Kota</button></a>

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>FOTO</th>
                                    <th>NAMA KABUPATEN/KOTA</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kabupaten as $s) {
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
                                            <a href="<?= base_url('kabupaten_kota/edit/') . $s->id; ?>"><button class="btn btn-primary">Edit</button></a>
                                            <a href="<?= base_url('kabupaten_kota/hapus/') . $s->id; ?>"><button class="btn btn-danger">Hapus</button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <?php
                                $no = 1;
                                foreach ($kota as $k) {
                                ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>

                                        <td>
                                            <img src="<?= base_url('assets/images/kabupaten_kota/'); ?><?= $k->foto ?>" alt="" width='60' height='63'>
                                        </td>

                                        <td>
                                            <?= $k->nama_kabupaten_kota ?>
                                        </td>

                                        <td>
                                            <a href="<?= base_url('kabupaten_kota/edit/') . $k->id; ?>"><button class="btn btn-primary">Edit</button></a>
                                            <a href="<?= base_url('kabupaten_kota/hapus/') . $k->id; ?>"><button class="btn btn-danger">Hapus</button></a>
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