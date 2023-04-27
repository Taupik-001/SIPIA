<main class="container py-5">
    <?php
    foreach ($wisata as $s) {
    ?>
        <div class="text-white rounded bg-dark">
            <div class="col-md-12 px-0">

                <img src="<?= base_url('assets/images/wisata/'); ?><?= $s->foto ?>" class="" width="100%" alt="...">

            </div>
        </div>

        <div class="pt-5 row g-5">
            <div class="col-md-8">

                <h1 class="pb-4 mb-4 fst-italic border-bottom">
                    <?= $s->judul_utama ?>
                </h1>
                <article class="blog-post">
                    <h2 class="blog-post-title" id="nama_hotel">
                        <?= $s->nama_wisata ?>
                    </h2>
                    <p class="blog-post-meta">
                        <?= $s->tanggal; ?>
                        <a href="#">
                            <?= $s->bulan; ?>
                            <?= $s->tahun; ?>
                        </a>
                        by
                        <a href="#">
                            Taupik
                        </a>
                    </p>
                    <style>
                        p {
                            font-size: 16px;
                            /* ukuran font */
                            line-height: 1.5;
                            /* jarak antar baris */
                            text-align: justify;
                            /* rata kanan kiri */
                            text-indent: 1em;
                            /* indentasi pada awal paragraf */
                        }
                    </style>


                    <!-- <div class="keterangan"><?php echo $s->keterangan; ?></div> -->
                    <p>
                        <b>SIPIa.com </b> - <?= $s->keterangan; ?>
                    </p>
                </article>

            </div>
        <?php } ?>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">Tentang</h4>
                    <p class="mb-0">
                        Wisata adalah kegiatan yang dilakukan oleh seseorang atau kelompok untuk berkunjung ke tempat-tempat yang menarik, baik itu alam maupun buatan manusia. Wisata dapat dilakukan untuk tujuan rekreasi, liburan, atau bahkan sebagai kegiatan bisnis. Wisata juga dapat mencakup kegiatan seperti mengunjungi objek wisata, mencoba makanan atau minuman khas daerah tertentu, berpartisipasi dalam acara budaya atau festival, dan melakukan kegiatan olahraga atau petualangan. Wisata dapat menjadi sumber penghasilan bagi suatu daerah atau negara, serta memberikan pengalaman dan pengetahuan baru bagi para wisatawan.
                    </p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
        </div>



</main>