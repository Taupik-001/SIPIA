<!-- Navigation Top Bar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container d-flex">
        <a href="<?= base_url("home") ?>" class="navbar-brand">
            <img src="<?= base_url('assets/images/icon/Logo.png'); ?>" width="150px" alt="">
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item px-3">
                    <a href="<?= base_url("home") ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a href="<?= base_url("kategori") ?>" class="nav-link">Artikel</a>
                </li>
                <li class="nav-item px-3">
                    <a href="<?= base_url("kategori/wisata") ?>" class="nav-link">Wisata</a>
                </li>
                <li class="nav-item px-3">
                    <a href="<?= base_url("kategori/hotel") ?>" class="nav-link">Hotel</a>
                </li>
                <li class="nav-item px-3">
                    <a href="<?= base_url("kategori/kuliner") ?>" class="nav-link">Kuliner</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END Navigation Top Bar -->