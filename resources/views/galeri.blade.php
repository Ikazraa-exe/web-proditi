@extends('layouts-front.main')

@section('container')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Galeri</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Info Prodi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Galeri Program Studi D-III Teknologi Informasi</h1>
            </div>
        </div>
    </div>

    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                    <section>
                        <!-- Photos by Daniel J. Schwarz (unsplash.com/@danieljschwarz) -->
                        <div class="gallery">
                            <div class="gallery-item item-3x4">
                                <img class="thumb placeholder"
                                    src="img/album-1.jpg"
                                    data-src="img/album-1.jpg"
                                    data-image="img/album-1.jpg">
                            </div>

                            <div class="gallery-item item-4x3">
                                <img class="thumb placeholder"
                                    src="img/album-2.jpg"
                                    data-src="img/album-2.jpg"
                                    data-image="img/album-2.jpg">
                            </div>

                            <div class="gallery-item item-3x4">
                                <img class="thumb placeholder"
                                    src="img/album-3.jpg"
                                    data-src="img/album-3.jpg"
                                    data-image="img/album-3.jpg">
                            </div>

                            <div class="gallery-item item-4x3">
                                <img class="thumb placeholder"
                                    src="img/album-4.jpg"
                                    data-src="img/album-4.jpg"
                                    data-image="img/album-4.jpg">
                            </div>
                        </div>
                        <div class="gallery">
                            <div class="gallery-item item-3x4">
                                <img class="thumb placeholder"
                                    src="img/pak.jpg"
                                    data-src="img/pak.jpg"
                                    data-image="img/pak.jpg">
                            </div>

                            <div class="gallery-item item-4x3">
                                <img class="thumb placeholder"
                                    src="img/himti.jpg"
                                    data-src="img/himti.jpg"
                                    data-image="img/himti.jpg">
                            </div>

                            <div class="gallery-item item-3x4">
                                <img class="thumb placeholder"
                                    src="img/tegar.jpg"
                                    data-src="img/tegar.jpg"
                                    data-image="img/tegar.jpg">
                            </div>

                            <div class="gallery-item item-4x3">
                                <img class="thumb placeholder"
                                    src="img/pakirwan.jpg"
                                    data-src="img/pakirwan.jpg"
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
