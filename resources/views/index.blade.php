@extends('layouts-front.main')

@section('container')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">Program Studi D-III Teknologi
                                        Informasi</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">Program Studi D-III Teknologi
                                        Informasi</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">Program Studi D-III Teknologi
                                        Informasi</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


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
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s" src="img/webdev.jpeg"
                                style="margin-top: 25%;">
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


    <!-- Facts Start 
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="">
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
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="text-primary">Dosen</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="text-primary">Akreditasi</span>
                </div>
            </div>
        </div>
    </div>
     Facts End -->



    <!-- Quote Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 quote-text" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
                    <div class="h-100 px-4 px-sm-5 ps-lg-0 wow fadeIn" data-wow-delay="0.1s">
                        <div class="text-end">
                            <a href="https://pmb.polita.ac.id/" class="align-self-start btn btn-primary py-4 px-5">PMB POLITA</a>
                        </div>
                        <div class="text-start">
                            <h1 class="text-white">Penerimaan Mahasiswa Baru</h1>
                        </div>
                        <p class="text-light text-start">"Yuk sambut petualangan baru dalam dunia pendidikan dengan menjadi bagian dari Kampus Polita!<br>
                            Bergabunglah bersama kami untuk meraih impian, menjelajahi ilmu pengetahuan, dan membentuk masa<br>
                            depan yang gemilang. Bersama Kampus Polita, mari kita wujudkan potensi terbaikmu dan jadilah<br>
                            bagian dari komunitas yang dinamis, kreatif, dan progresif. Ayo, daftarkan dirimu sekarang dan<br>
                            raih pengalaman belajar yang tak terlupakan!"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Team Start -->
    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                    <section>
                        <!-- Photos by Daniel J. Schwarz (unsplash.com/@danieljschwarz) -->
                        <div class="gallery">
                            <div class="gallery-item item-3x4">
                                <img class="thumb placeholder" src="img/album-1.jpg" data-src="img/album-1.jpg"
                                    data-image="img/album-1.jpg">
                            </div>

                            <div class="gallery-item item-4x3">
                                <img class="thumb placeholder" src="img/album-2.jpg" data-src="img/album-2.jpg"
                                    data-image="img/album-2.jpg">
                            </div>

                            <div class="gallery-item item-3x4">
                                <img class="thumb placeholder" src="img/album-3.jpg" data-src="img/album-3.jpg"
                                    data-image="img/album-3.jpg">
                            </div>

                            <div class="gallery-item item-4x3">
                                <img class="thumb placeholder" src="img/album-4.jpg" data-src="img/album-4.jpg"
                                    data-image="img/album-4.jpg">
                            </div>
                        </div>
                        <div class="gallery">
                            <div class="gallery-item item-3x4">
                                <img class="thumb placeholder" src="img/pak.jpg" data-src="img/pak.jpg"
                                    data-image="img/pak.jpg">
                            </div>

                            <div class="gallery-item item-4x3">
                                <img class="thumb placeholder" src="img/himti.jpg" data-src="img/himti.jpg"
                                    data-image="img/himti.jpg">
                            </div>

                            <div class="gallery-item item-3x4">
                                <img class="thumb placeholder" src="img/tegar.jpg" data-src="img/tegar.jpg"
                                    data-image="img/tegar.jpg">
                            </div>

                            <div class="gallery-item item-4x3">
                                <img class="thumb placeholder" src="img/pakirwan.jpg" data-src="img/pakirwan.jpg"
                                    data-image="img/pakirwan.jpg">
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>


    <!-- Team End -->
@endsection
