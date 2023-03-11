<!-- <div id="loading-area" class="loader1"></div> -->
<header class="site-header header header-creative-two mo-left">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix onepage">
            <div class="container-fluid">
                <!-- website logo -->
                <div class="logo-header logo-ac mostion">
                    <a href="{{ url('/') }}">
                        <img src="assets/images/logo-bina-drive.png" alt="">
                    </a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="header-nav navbar-collapse collapse justify-content-end navbar" id="navbarNavDropdown">
                    <ul class="nav navbar-nav nav-style">
                        <li> <a href="{{ url('/') }}">Beranda</a></li>
                        <li> <a href="javascript:void(0)">Tentang Kami<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/about-us') }}">Perusahaan</a></li>
                                <li><a href="{{ url('/our-team') }}">Team Kami</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{ url('/package') }}">Paket Kursus</a></li>
                        <li> <a href="{{ url('/gallery') }}">Galeri</a></li>
                        <li> <a href="{{ url('/contact-us') }}">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>