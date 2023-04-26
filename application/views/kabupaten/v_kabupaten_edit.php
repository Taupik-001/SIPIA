<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('kabupaten'); ?>">Kabupaten</a></li>
            <li class="active"><a href="#">Edit</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">

                <?php
                foreach ($kabupaten_kota as $s) { ?>

                    <form action="<?= base_url('kabupaten/edit_action'); ?> " method="post" id="form-satuan" enctype="multipart/form-data">
                        <table class="table table-striped ">

                            <input type="hidden" name="id" class="form-control" value="<?= $s->id; ?>">

                            <tr>
                                <td width="150px">Provinsi : </td>
                                <td><select class="form-control" name="nama_provinsi" id="nama_provinsi" required="">
                                        <option value="">Pilih</option>
                                        <?php foreach ($provinsi as $row) {
                                            if ($row->id == $s->nama_provinsi) { ?>
                                                <option value="<?= $row->id; ?>" selected=selected><?= $row->id . ' - ' . $row->nama_provinsi; ?></option>
                                            <?php

                                            } else {
                                            ?>
                                                <option value="<?= $row->id; ?>"><?= $row->id . ' - ' . $row->nama_provinsi; ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Kabupaten/Kota : </td>
                                <td><select class="form-control" name="jenis_kabupaten_kota" id="jenis_kabupaten_kota" required="">
                                        <option value="">Pilih</option>
                                        <?php foreach ($kabupaten_kota_jenis as $row) {
                                            if ($row->id == $s->jenis_kabupaten_kota) { ?>
                                                <option value="<?= $row->id; ?>" selected=selected><?= $row->id . ' - ' . $row->jenis_kabupaten_kota; ?></option>
                                            <?php

                                            } else {
                                            ?>
                                                <option value="<?= $row->id; ?>"><?= $row->id . ' - ' . $row->jenis_kabupaten_kota; ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Nama Kabupaten : </td>
                                <td><input type="text" class="form-control" name="nama_kabupaten_kota" required="" value="<?= $s->nama_kabupaten_kota ?>"></td>
                            </tr>

                            <tr>
                            <tr>
                                <td>Foto : </td>
                                <td><input type="file" class="form-control" name="filefoto"></td>
                                <input type="hidden" name="filelama" class="form-control" value="<?= $s->foto; ?>">
                            <tr>
                                <td></td>
                                <td><img src="<?= base_url('assets/images/kabupaten/'); ?><?= $s->foto ?>" alt="" width="200"></td>
                            </tr>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="submit" class="btn btn-success" value="Edit">
                                    <button class="btn btn-danger" value=""><a href="<?= base_url('kabupaten'); ?>" style="color:white">Batal</a></button>
                                </td>

                            </tr>
                        <?php } ?>
                        </table>

                    </form>


            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>