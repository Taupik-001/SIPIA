<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('kota'); ?>">Kota</a></li>
            <li class="active"><a href="#">Input</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <form action="<?php echo base_url('kota/input_action'); ?> " method="post" enctype="multipart/form-data">
                <section class="col-lg-6 connectedSortable">
                    <table class="table col-md-6">
                    <input type="hidden" name="jenis_kabupaten_kota" class="form-control" value="2">
                        <tr>
                            <td>Provinsi : </td>
                            <td><select class="form-control" name="nama_provinsi" id="nama_provinsi" required="">
                                    <option value="">Pilih</option>
                                    <?php foreach ($provinsi as $row) { ?>
                                        <option value="<?php echo $row->id; ?>"><?php echo $row->nama_provinsi; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Nama Kota : </td>
                            <td><input type="text" class="form-control" name="nama_kabupaten_kota" required="" value=""></td>
                        </tr>

                        <tr>
                            <td>Foto : </td>
                            <td><input type="file" class="form-control" name="filefoto" required="" value=""></td>
                        </tr>

                    </table>
                </section>
                <table class="table col-lg-12">
                    <tr>
                        <td><input type="submit" class="btn btn-success" value="Tambah">
                            <button class="btn btn-danger" value=""><a href="<?php echo base_url('kota'); ?>" style="color:white">Batal</a></button>
                        </td>
                    </tr>
                </table>
            </form>



            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>