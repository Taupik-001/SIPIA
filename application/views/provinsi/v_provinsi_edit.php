<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('provinsi'); ?>">Provinsi</a></li>
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
                foreach ($provinsi as $s) { ?>

                    <form action="<?php echo base_url() . 'provinsi/edit_action'; ?> " method="post" id="form-satuan" enctype="multipart/form-data">
                        <table class="table table-striped ">
                            <input type="hidden" name="id" class="form-control" value="<?php echo $s->id; ?>">

                            <tr>
                                <td width="150px">Nama Provinsi</td>
                                <td><input type="text" class="form-control" name="nama_provinsi" required="required" value="<?php echo $s->nama_provinsi ?>"></td>
                            </tr>

                            <tr>
                            <tr>
                                <td>Foto</td>
                                <td><input type="file" class="form-control" name="filefoto"></td>
                                <input type="hidden" name="filelama" class="form-control" value="<?php echo $s->foto; ?>">
                            <tr>
                                <td></td>
                                <td><img src="<?php echo base_url('assets/images/provinsi/'); ?><?php echo $s->foto ?>" alt="" width="200"></td>
                            </tr>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="submit" class="btn btn-success" value="Edit">
                                    <button class="btn btn-danger" value=""><a href="<?php echo base_url('provinsi'); ?>" style="color:white">Batal</a></button>
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