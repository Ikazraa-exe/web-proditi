@extends('layouts-front.main')

@section('container')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Mitra Prodi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mitra Prodi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="card mb-3 ">
        <div class="row g-0">
            <div class="col-md-4">
                <center> <img src="img/logo-prop-kalbar.png" class="img-fluid rounded-start" alt="..."
                        style="width: 130px; height: 180px;"></center>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Pemerintah Provinsi Kalimantan Barat</h5>
                    <p class="card-text">Mitra Program Studi D-III Teknologi Informasi dalam bentuk pemerintahan. Pemprov
                        Kalimantan Barat berperan sebagai jembatan penghubung mahasiswa dengan dunia kerja untuk lingkungan
                        pemerintahan dan administrasi.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 ">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Dinas Komunikasi dan Informatika Provinsi Kalimantan Barat</h5>
                    <p class="card-text">Mitra Program Studi D-III Teknologi Informasi dalam bentuk pemerintahan bidang
                        komunikasi dan informatika. Dinas Komunikasi dan Informatika (DISKOMINFO) Kalimantan Barat berperan
                        sebagai jembatan penghubung mahasiswa dengan dunia kerja untuk lingkungan pemanfaatan teknologi dan
                        komunikasi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <center> <img src="img/diskominfo.png" class="img-fluid rounded-start" alt="..."
                        style="width: 200px; height: 200px;"></center>
            </div>
        </div>
    </div>

    <div class="card mb-3 ">
        <div class="row g-0">
            <div class="col-md-4">
                <center> <img src="img/universitas-tanjungpura-pontianak.png" class="img-fluid rounded-start" alt="..."
                        style="width: 150px; height: 150px;"></center>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Universitas Tanjungpura</h5>
                    <p class="card-text">Mitra Program Studi D-III Teknologi Informasi dalam bentuk pendidikan. Universitas
                        Tanjungpura berperan sebagai jembatan penghubung mahasiswa dengan perkembangan di dunia pendidikan
                        serta memperluas jaringan relasi pendidikan dan organisasi kemahasiswaan.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
