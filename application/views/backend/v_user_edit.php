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
                foreach ($user as $s) { ?>

                    <form action="<?= base_url('user/edit_action'); ?> " method="post" id="form-satuan" enctype="multipart/form-data">
                        <table class="table table-striped ">
                            <input type="hidden" name="id" class="form-control" value="<?= $s->id; ?>">

                            <tr>
                                <td>Nama</td>
                                <td><input type="text" class="form-control" name="nama" required="required" value="<?= $s->nama ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" class="form-control" name="email" required="required" value="<?= $s->email ?>"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" class="form-control" name="password" required="required" value="<?= $s->password ?>"></td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td><input type="text" class="form-control" name="no_telp" required="required" value="<?= $s->no_telp ?>"></td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td><input type="text" class="form-control" name="id_level" required="required" value="3"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="submit" class="btn btn-success" value="Edit">
                                    <button class="btn btn-danger" value=""><a href="<?= base_url('user'); ?>" style="color:white">Batal</a></button>
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