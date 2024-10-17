<?php
include "header.php";
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
        <img src="dist/img/loogo.png" class="" alt="" style="width: 180px; height: 55px;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <a href="/prodi_ti/index.php" target="_blank">
            <div class="user-panel mt-5 pb-3 mb-3 justify-content-center">
                <button type="button" class="btn btn-block btn-warning">Web Utama</button>
            </div>
        </a>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="settings.php" class="nav-link ">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="tentang.php" class="nav-link ">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            Tentang
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="tim.php" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Tim Prodi
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="fasilitas.php" class="nav-link ">
                        <i class="nav-icon fas fa-laptop-house"></i>
                        <p>
                            Fasilitas
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="galeri.php" class="nav-link ">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Galeri
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="berita.php" class="nav-link ">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="agenda.php" class="nav-link ">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Agenda
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="pengumuman.php" class="nav-link ">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Pengumuman
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="dokumen.php" class="nav-link ">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Dokumen
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="login-v2.php" class="nav-link ">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>