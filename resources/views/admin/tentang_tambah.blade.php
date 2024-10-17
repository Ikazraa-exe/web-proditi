<?php
include "header.php";
?>

<?php
include "sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php" class="text-warning">Beranda</a></li>
                        <li class="breadcrumb-item active"><a href="tentang.php" class="text-warning">Tentang</a></li>
                        <li class="breadcrumb-item active"><a href="#" class="text-warning">Tambah</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- AREA content -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Tambah data</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul_tentang">Data Dosen</label>
                                    <input type="text" class="form-control" id="judul_tentang" name="judul_tentang"
                                        placeholder="Masukkan Data Dosen Disini">
                                </div>
                                <div class="form-group">
                                    <label for="judul_tentang">Data Mahasiswa</label>
                                    <input type="text" class="form-control" id="judul_tentang" name="judul_tentang"
                                        placeholder="Masukkan Data Mahasiswa Disini">
                                </div>
                                <div class="form-group">
                                    <label for="judul_tentang">Data Staff</label>
                                    <input type="text" class="form-control" id="judul_tentang" name="judul_tentang"
                                        placeholder="Masukkan Data Staff Disini">
                                </div>
                                <div class="form-group">
                                    <label for="judul_tentang">Data Akreditasi</label>
                                    <input type="text" class="form-control" id="judul_tentang" name="judul_tentang"
                                        placeholder="Masukkan Data Akreditasi Disini">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Isi Tentang</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        placeholder="Masukkan Isi tentang Disini" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
include "footer.php";
?>