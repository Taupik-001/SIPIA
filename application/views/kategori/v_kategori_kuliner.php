<style>
    .text-thumbail {
        text-decoration: none;
        color: black;
    }

    .title-thumbail {
        text-decoration: none;
        color: black;
        padding-left: 2%;
    }
</style>
<style>
    div.main-text {
        overflow-y: hidden;
        height: 75px;
    }

    /*This will hide everything, which goes outside of the 200px div*/
</style>

<section class="py-5 text-center container">
    <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Artikel Kuliner</h1>
            <!-- <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p> -->
        </div>
    </div>
</section>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 g-3">

        <?php
        foreach ($kuliner as $w) {
        ?>
            <div class="col">
                <div class="card shadow-sm">
                    <a href="" class="text-thumbail">
                        <img class="bd-placeholder-img img-fluid card-img-top" width="100%" height="225" src="<?= base_url('assets/images/kuliner/'); ?><?= $w->foto ?>" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <h2 class="title-thumbail"><?= $w->judul_utama ?></h2>
                        </img>
                    </a>

                    <div class="card-body">
                        <p class="card-text">
                        <div class="main-text">

                            <?= $w->keterangan ?>
                        </div>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="<?= base_url('artikel/kuliner/') . $w->url; ?>">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Baca Selengkapnya</button>
                            </a>
                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>





    </div>
</div>