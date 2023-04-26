<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('wisata'); ?>">Wisata</a></li>
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
            <form action="<?= base_url('wisata/input_action'); ?> " method="post" enctype="multipart/form-data">
                <section class="col-lg-6 connectedSortable">


                    <table class="table col-md-6">

                        <tr>
                            <td>Kabupaten/Kota : </td>
                            <td>
                                <select class="form-control" name="nama_kabupaten_kota" id="nama_kabupaten_kota" required="">
                                    <option value="">Pilih</option>
                                    <?php foreach ($kabupaten_kota as $row) { ?>
                                        <option value="<?= $row->id; ?>"><?= $row->nama_kabupaten_kota; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Provinsi : </td>
                            <td>
                                <select class="form-control" name="nama_provinsi" id="nama_provinsi" required="">
                                    <option value="">Pilih</option>
                                    <?php foreach ($provinsi as $s) { ?>
                                        <option value="<?= $s->id; ?>"><?= $s->nama_provinsi; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Nama Wisata : </td>
                            <td><input type="text" class="form-control" name="nama_wisata" required="" value="-"></td>
                        </tr>

                        <tr>
                            <td>Kategori Wisata : </td>
                            <td>
                                <select class="form-control" name="jenis_wisata" id="jenis_wisata" required="">
                                    <option value="">Pilih</option>
                                    <?php foreach ($wisata_jenis as $s) { ?>
                                        <option value="<?= $s->id; ?>"><?= $s->jenis_wisata; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Harga Tiket : </td>
                            <td>
                                <input type="text" class="form-control" name="harga_tiket" required="" value="Rp. 000.000 / Orang">
                            </td>
                        </tr>

                        <tr>
                            <td>Jam Buka : </td>
                            <td><input type="time" class="form-control" name="jam_buka" required="" value="06:00"></td>
                        </tr>

                        <tr>
                            <td>Jam Tutup : </td>
                            <td><input type="time" class="form-control" name="jam_tutup" required="" value="18:00"></td>
                        </tr>


                        <tr>
                            <td>Alamat : </td>
                            <td><textarea type="text" class="form-control" name="alamat" required="">-</textarea></td>
                        </tr>

                        <tr>
                            <td>Nomor Telephone : </td>
                            <td><input type="text" class="form-control" name="no_telp" required="" value="-"></td>
                        </tr>
                        <tr>
                            <td>Whatsapp : </td>
                            <td><input type="text" class="form-control" name="no_wa" required="" value="-"></td>
                        </tr>
                    </table>
                </section>
                <section class="col-lg-6 connectedSortable">
                    <table class="table col-md-6">


                        <tr>
                            <td>Instagram : </td>
                            <td><input type="text" class="form-control" name="instagram" required="" value="-"></td>
                        </tr>

                        <tr>
                            <td>Facebook : </td>
                            <td><input type="text" class="form-control" name="facebook" required="" value="-"></td>
                        </tr>

                        <tr>
                            <td>Email : </td>
                            <td><input type="text" class="form-control" name="email" required="" value="-"></td>
                        </tr>

                        <tr>
                            <td>Website : </td>
                            <td><input type="text" class="form-control" name="website" required="" value="-"></td>
                        </tr>

                        <tr>
                            <td>Maps : </td>
                            <td><input type="text" class="form-control" name="maps" required="" value="-"></td>
                        </tr>

                        <tr>
                            <td>Foto : </td>
                            <td><input type="file" class="form-control" name="filefoto" required="" value=""></td>
                        </tr>

                        <tr>
                            <td>Video Url : </td>
                            <td><input type="text" class="form-control" name="video" required="" value="-"></td>
                        </tr>

                        <tr>
                            <td>Keterangan : </td>
                            <td><textarea type="text" class="form-control" name="keterangan" required="">-</textarea></td>
                        </tr>
                        <tr>
                            <td>Judul Artikel : </td>
                            <td><input type="text" class="form-control" name="judul_utama" required="" value="-"></td>
                        </tr>
                        <tr>
                            <td>Url : </td>
                            <td><input type="text" class="form-control" name="url" required="" value="-"></td>
                        </tr>

                    </table>
                </section>

                <table class="table col-lg-12">
                    <tr>
                        <td><input type="submit" class="btn btn-success" value="Tambah">
                            <button class="btn btn-danger" value=""><a href="<?= base_url('wisata'); ?>" style="color:white">Batal</a></button>
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