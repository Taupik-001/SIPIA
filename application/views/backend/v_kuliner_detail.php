
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<!-- <section class="content-header"> -->
  
<!-- </section> -->

<!-- Main content -->
<!-- <section class="content"> -->
  <!-- Small boxes (Stat box) -->
  
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">

    <?php
    foreach ($kuliner as $s) { ?>

<form action="<?php echo base_url(). 'kuliner/detail_aksi'; ?> " method="post" id="form-satuan" enctype="multipart/form-data">

  <img class="center-img" src="<?php echo base_url(). 'assets/images/kuliner/'?><?php echo $s->foto?>" alt="" style="width:100%">
    <h3 class="wisata-tittle gap-item" style="background-color: #100C00"><?php echo $s->nama_kuliner?></h3>
    <h4 class="wisata-tittle gap-item" style="background-color: #EC8802"><?php echo $s->alamat?></h4>
    <h4 class="wisata-tittle gap-item" style="background-color: #F2D604">Harga : <?php echo $s->harga ?></h4>
    <h4 class="wisata-tittle gap-item" style="background-color: #371303"><?php echo $s->keterangan ?></h4>

    <a href="<?php echo base_url().'hotel/bykabupaten/'.$s->id_kabupaten;?>" class="button-wisata gap-item" style="background-color: sandybrown">HOTEL TERDEKAT</a>
    <a href="<?php echo base_url().'wisata/bykabupaten/'.$s->id_kabupaten;?>" class="button-wisata gap-item" style="background-color: brown">WISATA TERDEKAT</a><br>

    <a href="https://wa.me/<?php echo $s->no_wa ?>" class="button-data-wisata"><img src="<?php echo base_url().'assets/images/logo/whatsapp.png';?>" ></a>
    <a href="https://web.facebook.com/<?php echo $s->facebook ?>" class="button-data-wisata"><img src="<?php echo base_url().'assets/images/logo/facebook.png';?>"></a>
    <a href="https://www.instagram.com/<?php echo $s->instagram ?>" class="button-data-wisata"><img src="<?php echo base_url().'assets/images/logo/instagram.png';?>"></a>
    <a href="https://www.google.co.id/maps/" class="button-data-wisata"><img src="<?php echo base_url().'assets/images/logo/mapss.png';?>"></a>

    
      <?php } ?>
    </form>


   </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

<!-- </section> -->
<!-- /.content -->
</div>