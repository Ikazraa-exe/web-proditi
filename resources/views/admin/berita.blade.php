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
                        <li class="breadcrumb-item active"><a href="#" class="text-warning">Berita</a></li>
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
                    <h3 class="card-title"></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-success">
                            <a href="berita_tambah.php" class="text-light">Tambah Data</a>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <div id="areaChart" style="min-height: 0px; height: 5px; max-height: 250px; max-width: 100%;">
                        </div>
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Berita</th>
                                    <th>Tanggal Berita</th>
                                    <th>Isi Berita</th>
                                    <th>Isi Foto</th>
                                    <th>Status Berita</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Berita 1</td>
                                    <td>20-09-2023</td>
                                    <td>Pelaksanaan MATAF</td>
                                    <td>
                                        <img src="dist/img/photo3.jpg" alt="mataf" class="img-fluid" height="200"
                                            width="100">
                                    </td>
                                    <td>NONAKTIF</td>
                                    <td>
                                        <button type="button" class="btn btn-warning">
                                            <a href="berita_tambah.php" class="text-light">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <a href="#" class="text-light">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>berita 2</td>
                                    <td>25-09-2023</td>
                                    <td>Proses Pelaksanaan Sosialisasi Prodi TI</td>
                                    <td><img src="dist/img/photo2.png" alt="mataf" class="img-fluid" height="200"
                                            width="100">
                                    </td>
                                    <td>NONAKTIF</td>
                                    <td>
                                        <button type="button" class="btn btn-warning">
                                            <a href="berita_tambah.php" class="text-light">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <a href="#" class="text-light">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>berita 3</td>
                                    <td>17-07-2023</td>
                                    <td>Pelaksanaan UAS</td>
                                    <td>
                                        <img src="dist/img/photo1.png" alt="mataf" class="img-fluid" height="200"
                                            width="100">
                                    </td>
                                    <td>NONAKTIF</td>
                                    <td>
                                        <button type="button" class="btn btn-warning">
                                            <a href="berita_tambah.php" class="text-light">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <a href="#" class="text-light">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
include "footer.php";
?>