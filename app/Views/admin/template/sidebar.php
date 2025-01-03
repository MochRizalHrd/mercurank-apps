<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"
                        role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url() ?>" class="nav-link">Dashboard</a>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #257180;">

            <!-- Brand Logo -->
            <a href=" <?= base_url() ?>" class="brand-link" style="color: #ffffff; text-decoration: none;">
                <img src="<?= base_url('assets/img/logo-umby.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Mercu Rank</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('admin/template/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style="color: #ffffff; text-decoration: none;">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class=" mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data
                        widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard') ?>" class="nav-link" style="color: #ffffff;">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard


                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data
                        widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('mahasiswa') ?>" class="nav-link" style="color: #ffffff;">
                                <i class=" nav-icon fas fa-users"></i>
                                <p>
                                    Data Mahasiswa


                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data
                        widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('kriteria') ?>" class="nav-link" style="color: #ffffff;">
                                <i class=" nav-icon fas fa-list-alt"></i>
                                <p>
                                    Data Kriteria


                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data
                        widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('perhitungan') ?>" class="nav-link" style="color: #ffffff;">
                                <i class=" nav-icon fas fa-calculator"></i>
                                <p>
                                    Perhitungan Moora


                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data
                        widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('laporan') ?>" class="nav-link" style="color: #ffffff;">
                                <i class=" nav-icon fas fa-file-alt"></i>
                                <p>
                                    Hasil dan Laporan


                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data
                        widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('pengguna') ?>" class="nav-link" style="color: #ffffff;">
                                <i class=" nav-icon fas fa-user"></i>
                                <p>
                                    Pengguna


                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><?= $title ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active"><?= $title ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">