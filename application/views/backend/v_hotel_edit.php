<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
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
                foreach ($hotel as $s) { ?>
                    <form action="<?= base_url('hotel/edit_action'); ?> " method="post" id="form-satuan" enctype="multipart/form-data">
                        <table class="table table-striped">
                            <input type="hidden" name="id" class="form-control" value="<?= $s->id; ?>">

                            <tr>
                                <td width="150px">Kabupaten/Kota : </td>
                                <td><select class="form-control" name="nama_kabupaten_kota" id="nama_kabupaten_kota" required="">
                                        <option value="">Pilih</option>
                                        <?php foreach ($kabupaten_kota as $row) {
                                            if ($row->id == $s->nama_kabupaten_kota) { ?>
                                                <option value="<?= $row->id; ?>" selected=selected><?= $row->id . ' - ' . $row->nama_kabupaten_kota; ?></option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="<?= $row->id; ?>"><?= $row->id . ' - ' . $row->nama_kabupaten_kota; ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Provinsi :</td>
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
                                <td>Nama Hotel : </td>
                                <td><input type="text" class="form-control" name="nama_hotel" required="required" value="<?= $s->nama_hotel ?>"></td>
                            </tr>

                            <tr>
                                <td>Tipe Bintang Hotel : </td>
                                <td><input type="text" class="form-control" name="tipe_hotel" required="required" value="<?= $s->tipe_hotel ?>"></td>
                            </tr>

                            <tr>
                                <td>Tarif : </td>
                                <td>
                                    <input type="text" class="form-control" name="tarif" required="required" value="<?= $s->tarif ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat : </td>
                                <td><textarea type="text" class="form-control" name="alamat" required="required" value=""><?= $s->alamat ?></textarea>
                            </tr>
                            <tr>
                                <td>Nomor Telephone : </td>
                                <td><input type="text" class="form-control" name="no_telp" required="required" value="<?= $s->no_telp ?>"></td>
                            </tr>
                            <tr>
                                <td>Whatsapp : </td>
                                <td><input type="text" class="form-control" name="no_wa" required="required" value="<?= $s->no_wa ?>"></td>
                            </tr>
                            <tr>
                                <td>Instagram : </td>
                                <td><input type="text" class="form-control" name="instagram" required="required" value="<?= $s->instagram ?>"></td>
                            </tr>
                            <tr>
                                <td>Facebook : </td>
                                <td><input type="text" class="form-control" name="facebook" required="required" value="<?= $s->facebook ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" class="form-control" name="email" required="required" value="<?= $s->email ?>"></td>
                            </tr>

                            <tr>
                                <td>Website : </td>
                                <td><input type="text" class="form-control" name="website" required="required" value="<?= $s->website ?>"></td>
                            </tr>
                            <tr>
                                <td>Maps : </td>
                                <td><input type="text" class="form-control" name="maps" required="required" value="<?= $s->maps ?>"></td>
                            </tr>

                            <tr>
                            <tr>
                                <td>Foto : </td>
                                <td><input type="file" class="form-control" name="filefoto"></td>
                                <input type="hidden" name="filelama" class="form-control" value="<?= $s->foto; ?>">
                            <tr>
                                <td>View</td>
                                <td><img src="<?= base_url('assets/images/hotel/'); ?><?= $s->foto ?>" alt="" width="200"></td>
                            </tr>
                            </tr>

                            <tr>
                                <td>Video Url : </td>
                                <td><input type="text" class="form-control" name="video" required="required" value="<?= $s->video ?>"></td>
                            </tr>

                            <tr>
                                <td>Keterangan : </td>
                                <td><textarea type="text" class="form-control" name="keterangan" required="required" value=""><?= $s->keterangan ?></textarea>
                            </tr>
                            <tr>
                                <td>Judul Artikel : </td>
                                <td><input type="text" class="form-control" name="judul_utama" required="required" value="<?= $s->judul_utama ?>"></td>
                            </tr>
                            <tr>
                                <td>Url : </td>
                                <td><input type="text" class="form-control" name="url" required="required" value="<?= $s->url ?>"></td>
                            </tr>
                            <tr>
                                <td>Aksi</td>
                                <td><input type="submit" class="btn btn-success" value="Edit">
                                    <button class="btn btn-danger" value=""><a href="<?= base_url('hotel'); ?>" style="color:white">Batal</a></button>
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