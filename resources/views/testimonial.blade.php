@extends('layouts-front.main')

@section('container')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Fasilitas</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Fasilitas</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Fasilitas Program Studi D-III Teknologi Informasi</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/DSC_0053.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/ruang kelas.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Ruang Kelas</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/DSC_1724.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/icon-02-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Lab. Pemrograman</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/lab komputer.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/lab jaringan.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Lab. Jaringan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/tutorial.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/ruang sidang.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Ruang Tutorial</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/perpus.png" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/icon-05-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Perpustakaan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/lab_mulmed2.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/icon-06-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Lab. Multimedia</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    @endsection