<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Blog Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/images/icon/Framejo.png'); ?>">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
        .mybrandapp {
            width: 20%;
        }

        @media (1px <=width <=250px) {
            .mybrandapp {
                width: 40%;
            }

            .togglestyle {
                padding-top: 1%;
            }
        }

        @media (250px <=width <=375px) {
            .mybrandapp {
                width: 35%;
            }

            .togglestyle {
                padding-top: 2%;
            }
        }

        @media (376px <=width <=500px) {
            .mybrandapp {
                width: 40%;
            }

            .togglestyle {
                padding-top: 5%;
            }
        }

        @media (501px <=width <=768px) {
            .mybrandapp {
                width: 35%;
            }

            .togglestyle {
                padding-top: 4%;
            }
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- <link href="blog.css" rel="stylesheet"> -->
</head>

<body>

    <!-- Navigation Top Bar -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <div class="d-flex">
                <a href="#" class="navbar-brand">
                    <img src="<?= base_url('assets/images/icon/Frame.png'); ?>" class="mybrandapp" alt="">
                    <!-- SIPIA -->
                </a>

                <div class="togglestyle">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class=" collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-3">
                        <a href="#wisata" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="#wisata" class="nav-link">Wisata</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="#kuliner" class="nav-link">Kuliner</a>
                    </li>
                    <li class="nav-item px-3">
                        <?php
                        foreach ($hotel_artikel as $s) {
                        ?>
                            <a href="<?= base_url('hotel_artikel/artikel/') . $s->id; ?>" class="nav-link">Hotel</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- END Navigation Top Bar -->

    <main class="container py-5">





        <div class="text-white rounded bg-dark">
            <div class="col-md-6 px-0">

                <img src="<?= base_url('assets/images/artikel/'); ?><?= $s->foto ?>" class="img-fluid" alt="...">

            </div>
        </div>


        <div class="pt-5 row g-5">
            <div class="col-md-8">
                <?php
                foreach ($hotel_artikel as $s) {
                ?>
                    <h1 class="pb-4 mb-4 fst-italic border-bottom">
                        <?= $s->judul_utama ?>
                    </h1>
                <?php } ?>

                <article class="blog-post">
                    <h2 class="blog-post-title" id="nama_hotel">
                        <?php
                        foreach ($hotel_artikel as $s) {
                        ?>
                            <?php foreach ($hotel as $row) {
                                if ($row->id == $s->nama_hotel) { ?>
                                    <?= $row->nama_hotel; ?>
                                <?php

                                } else {
                                ?>
                                    <?= $row->nama_hotel; ?>
                            <?php }
                            } ?>
                        <?php } ?>

                    </h2>
                    <p class="blog-post-meta">
                        <?php
                        foreach ($hotel_artikel as $s) {
                        ?>
                            <?= $s->tanggal_hari; ?>
                            <a href="#">
                                <?= $s->tanggal_bulan; ?>
                                <?= $s->tanggal_tahun; ?>
                            </a>
                        <?php } ?>
                        by
                        <a href="#">
                            <?php
                            foreach ($hotel_artikel as $s) {
                            ?>
                                <?= $s->editor; ?>
                            <?php } ?>
                        </a>
                    </p>

                    <?php
                    foreach ($hotel_artikel as $s) {
                    ?>
                        <p>
                            <b>SIPIa.com </b> - <?= $s->keterangan; ?>
                        </p>
                    <?php } ?>
                </article>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
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

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>