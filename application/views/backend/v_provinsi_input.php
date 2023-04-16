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

        <!-- Main row -->
        <div class="row">

            <!-- Left col -->
            <form action="<?php echo base_url() . 'provinsi/input_action'; ?> " method="post" enctype="multipart/form-data">
                <section class="col-lg-6 connectedSortable">
                    <table class="table col-md-6">
                        <tr>
                            <td>Nama Provinsi</td>
                            <td>
                                <input type="text" class="form-control" name="nama_provinsi" required="" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Foto</td>
                            <td>
                                <input type="file" class="form-control" name="filefoto" required="" value="">
                            </td>
                        </tr>

                    </table>
                </section>
                <table class="table col-lg-12">
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-success" value="Input">
                            <button class="btn btn-danger" value="">
                                <a href="<?php echo base_url() . 'provinsi'; ?>" style="color:white">Batal</a>
                            </button>
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