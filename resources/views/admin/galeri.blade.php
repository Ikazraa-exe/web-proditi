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
                        <li class="breadcrumb-item active"><a href="#" class="text-warning">galeri</a></li>
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
                            <a href="galeri_tambah.php" class="text-light">Tambah Data</a>
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
                                    <th>Nama galeri</th>
                                    <th>Foto galeri</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>galeri 1</td>
                                    <td>
                                    <img src="dist/img/photo4.jpg" alt="galeri" class="img-fluid" height="200"
                                            width="100">
                                    </td>
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