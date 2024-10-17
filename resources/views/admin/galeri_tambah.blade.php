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
                        <li class="breadcrumb-item active"><a href="fasilitas.php" class="text-warning">Fasilitas</a></li>
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
                                <div class="form-group">
                                    <label for="nama_fasilitas">Nama Fasilitas</label>
                                    <input type="text" class="form-control" id="nama_fasilitas" name="nama_fasilitas"
                                        placeholder="Isi Nama Fasilitas">
                                </div>
                                <div class="form-group">
                                    <label for="foto_fasilitas">Foto Fasilitas</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_fasilitas" name="foto_fasilitas">
                                            <label class="custom-file-label" for="foto_fasilitas">Pilih Foto</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">Tambah</button>
                            </div>
                        </form>
                    </div>
    </section>

    <?php
include "footer.php";
?>