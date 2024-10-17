<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PRODI TI | {{ $title }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" prodi, d3 teknologi Informasi, polita, politeknik aisyiyah pontianak, pontianak="keywords">
    <meta content="" Sistem Informasi Program Studi D-3 Teknologi Informasi Politeknik Aisyiyah
        Pontianak="description">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+62561-6655112</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>proditi@polita.ac.id</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"><img class="img-fluid me-3" src="img/logo5.png" alt="logo"></h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
                <a href="/" class="nav-item nav-link">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="/about" class="dropdown-item">Tentang</a>
                        <a href="/quote" class="dropdown-item">Struktur Prodi</a>
                        <a href="/team" class="dropdown-item">Tim Prodi</a>
                        <a href="/testimonial" class="dropdown-item">Fasilitas</a>
                        <a href="/mitra" class="dropdown-item">Mitra Prodi</a>
                    </div>
                </div>
                <a href="https://journal.polita.ac.id/index.php/politati" class="nav-item nav-link">JIKTI</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Akademik</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="https://siakad.polita.ac.id/" class="dropdown-item">SIAKAD</a>
                        <a href="#" class="dropdown-item">E-Learning</a>
                        <a href="#" class="dropdown-item">Alumni</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Info Prodi</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="/berita" class="dropdown-item">Berita</a>
                        <a href="/agenda" class="dropdown-item">Agenda</a>
                        <a href="/galeri" class="dropdown-item">Galeri</a>
                    </div>
                </div>
                <a href="/unduh" class="nav-item nav-link">Unduh Dokumen</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="https://www.instagram.com/ti.polita/"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="https://www.youtube.com/@PoliteknikAisyiyahPontianak"><i
                        class="fab fa-youtube"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href="https://www.instagram.com/ti.polita/"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <div>
        @yield('container')
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="text-white mb-4"><img class="img-fluid me-3" src="img/thumbnail_logo.png"
                            alt=""></h1>
                    <span>Program Studi D-III Teknologi Informasi :</span>
                    </p>Web Development - Technopreneur - Content Creator - Networking</p>
                    <div class="d-flex mt-2">
                        <a class="btn btn-square rounded-circle me-1" href="https://www.instagram.com/ti.polita/"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href="https://www.youtube.com/@PoliteknikAisyiyahPontianak"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href="https://www.instagram.com/ti.polita/"><i
                        class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Lokasi Kami</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Ampera No.09, Pontianak</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+62561-6655112</p>
                    <p><i class="fa fa-envelope me-3"></i>proditi@polita.ac.id</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Link Terkait</h5>
                    <a class="btn btn-link" href="https://campus.polita.ac.id/">Politeknik Aisyiyah Pontianak</a>
                    <a class="btn btn-link" href="https://siakad.polita.ac.id/">SIAKAD</a>
                    <a class="btn btn-link" href="">E-Learning</a>
                    <a class="btn btn-link" href="">LPPM</a>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="/">D-3 Teknologi Informasi</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="/">Prodi D3 TI</a> Distributed by <a
                            href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/gallery.js"></script>
    
</body>

</html>
