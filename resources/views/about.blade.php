@extends('layouts-front.main')

@section('container')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Tentang</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


      <!-- About Start -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5">Fokus Lulusan Kami:</h1>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-programmer.png" alt="">
                                    <h5 class="mb-0">Web Development</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-networking.png" alt="">
                                    <h5 class="mb-0">Networking</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-conten.png" alt="">
                                    <h5 class="mb-0">Content Creator</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-robot.png" alt="">
                                    <h5 class="mb-0">Technopreneurship</h5>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-phone-alt text-white"></i>
                                        </div>
                                        <h5 class="mb-0">+62561-6655112</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-envelope text-white"></i>
                                        </div>
                                        <h5 class="mb-0">proditi@polita.ac.id</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s" src="img/webdev.jpeg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s" src="img/konten.jpeg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s" src="img/network.jpeg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s" src="img/techno.jpeg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="text-primary">Lulusan</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="text-primary">Mahasiswa Aktif</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">4</h1>
                    <span class="text-primary">Dosen</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="text-primary">Akreditasi</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

     <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-20 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="display-6 mb-6">Visi</h3>
                    <p class="mb-5">Menghasilkan lulusan berwawasan teknologi informasi yang unggul dibidang teknopreneurship berbasis kearifan lokal berdasarkan nilai islam berkemajuan</p>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-08-light.png" alt="">
                        </div>
                        <div class="ms-4">
                            <h3 class="mb-3">Misi</h3>
                            <span>Menyelenggarakan Pendidikan di bidang teknologi Informasi untuk menghasilkan lulusan yang unggul, berwawasan kearifan lokal, dan berjiwa teknopreneurship berdasarkan nilai-nilai islam.</span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-08-light.png" alt="">
                        </div>
                        <div class="ms-4">
                            <h3 class="mb-3">Misi</h3>
                            <span>Melaksanakan penelitian dan pengabdian kepada masyarakat untuk menghasilkan produk teknologi informasi yang bermanfaat bagi masyarakat.</span>
                        </div>
                    </div>
                    <div class="d-flex mb-0">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-08-light.png" alt="">
                        </div>
                        <div class="ms-4">
                            <h3 class="mb-3">Misi</h3>
                            <span>Menjalin kerjasama yang strategis, sinergis dan berkelanjutan baik tingkat lokal, nasional maupun internasional.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


@endsection