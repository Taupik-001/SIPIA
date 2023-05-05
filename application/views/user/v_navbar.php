<style>
    .hr-light {
        color: white;
    }
    .hr-dark {
        color: #212529;
    }

    .navbar-shadow-light {
        box-shadow: 0px -5px 10px white;
    }

    .navbar-shadow-dark {
        box-shadow: 0px -5px 10px black;
    }
</style>
<!-- Navigation Top Bar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark navbar-shadow-light fixed-top">
    <div class="container d-flex">
        <a href="<?= base_url("home") ?>" class="navbar-brand">
            <img src="<?= base_url('assets/images/icon/Logo_GreenA.png'); ?>" id="logo" style="width: 150px;" alt="">
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <hr class="hr-light hr">
                <li class="nav-item px-3">
                    <a href="<?= base_url("home") ?>" class="font-poppins <?php if ($page == 'home') echo 'active'; ?> nav-link my-0">Home</a>
                </li>
                <hr class="hr-light hr">
                <li class="nav-item px-3">
                    <a href="<?= base_url("kategori") ?>" class="font-poppins <?php if ($page == 'artikel') echo 'active'; ?> nav-link">Artikel</a>
                </li>
                <hr class="hr-light hr">
                <li class="nav-item px-3">
                    <a href="<?= base_url("kategori/wisata") ?>" class="font-poppins <?php if ($page == 'wisata') echo 'active'; ?> nav-link">Wisata</a>
                </li>
                <hr class="hr-light hr">
                <li class="nav-item px-3">
                    <a href="<?= base_url("kategori/hotel") ?>" class="font-poppins <?php if ($page == 'hotel') echo 'active'; ?> nav-link">Hotel</a>
                </li>
                <hr class="hr-light hr">
                <li class="nav-item px-3">
                    <a href="<?= base_url("kategori/kuliner") ?>" class="font-poppins <?php if ($page == 'kuliner') echo 'active'; ?> nav-link">Kuliner</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END Navigation Top Bar -->
<!-- <script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.querySelector(".navbar").classList.add("navbar-shadow-dark");
            document.querySelector(".navbar").classList.add("bg-light");
            document.querySelector(".navbar").classList.add("navbar-light");

            document.querySelectorAll(".hr").classList.add("hr-dark");
            document.querySelectorAll(".hr").classList.remove("hr-light");

            document.querySelector(".navbar").classList.remove("navbar-shadow-light");
            document.querySelector(".navbar").classList.remove("bg-dark");
            document.querySelector(".navbar").classList.remove("navbar-dark");

            document.getElementById("logo").src = "<?= base_url('assets/images/icon/Logo_GreenF.png'); ?>";
        } else {
            document.querySelector(".navbar").classList.add("navbar-shadow-light");
            document.querySelector(".navbar").classList.add("bg-dark");
            document.querySelector(".navbar").classList.add("navbar-dark");

            document.querySelectorAll(".hr").classList.add("hr-light");
            document.querySelectoral(".hr").classList.remove("hr-dark");
            
            document.querySelector(".navbar").classList.remove("navbar-shadow-dark");
            document.querySelector(".navbar").classList.remove("bg-light");
            document.querySelector(".navbar").classList.remove("navbar-light");

            document.getElementById("logo").src = "<?= base_url('assets/images/icon/Logo_GreenA.png'); ?>";
        }
    }
</script> -->
<script>
  window.onscroll = function() {
    scrollFunction();
  };

  function scrollFunction() {
    var navbar = document.querySelector(".navbar");
    var logo = document.getElementById("logo");
    var hrs = document.querySelectorAll(".hr");

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      navbar.classList.add("navbar-shadow-dark", "bg-light", "navbar-light");
      navbar.classList.remove("navbar-shadow-light", "bg-dark", "navbar-dark");
      logo.src = "<?= base_url('assets/images/icon/Logo_GreenF.png'); ?>";
      
      for (var i = 0; i < hrs.length; i++) {
        hrs[i].classList.add("hr-dark");
        hrs[i].classList.remove("hr-light");
      }
    } else {
      navbar.classList.add("navbar-shadow-light", "bg-dark", "navbar-dark");
      navbar.classList.remove("navbar-shadow-dark", "bg-light", "navbar-light");
      logo.src = "<?= base_url('assets/images/icon/Logo_GreenA.png'); ?>";
      
      for (var i = 0; i < hrs.length; i++) {
        hrs[i].classList.add("hr-light");
        hrs[i].classList.remove("hr-dark");
      }
    }
  }
</script>
