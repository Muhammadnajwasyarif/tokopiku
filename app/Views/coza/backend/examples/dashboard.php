<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../images/icons/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Beranda</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/now-ui-dashboard.css?v=1.0.1')?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url('assets/demo/demo.css')?>" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="red">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    CZ
                </a>
                <a href="#" class="simple-text logo-normal">
                    Coza Store
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="<?= base_url('admin/dashboard')?>">
                            <i class="now-ui-icons design_app"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/produk')?>">
                            <i class="now-ui-icons business_briefcase-24"></i>
                            <p>Produk</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.php">
                            <i class="now-ui-icons business_bank"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li>
                        <a href="transaksi.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Transaksi</p>
                        </a>
                    </li>
                    <li>
                        <a href="../../logout.php">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Beranda</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header">
                <div class="header text-center">
                    <h2 class="title">Beranda</h2>
                    <p class="category">Selamat Datang di Backend
                        <a target="_blank" href="../../index.php">Coza Store</a>. 
                    </p>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Produk</h4>
                            </div>
                            <div class="card-body">
                                <a href="produk.php">
                                <div class="alert alert-info">
                                    <button type="button" aria-hidden="true" class="close">
                                        <i class="now-ui-icons design_bullet-list-67"></i>
                                    </button>
                                    <span>
                                        <b> List Produk </b> </span>
                                </div>
                                </a>
                                <a href="tambahprdk.php">
                                <div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">
                                        <i class="now-ui-icons location_pin"></i>
                                    </button>
                                    <span>
                                        <b> Tambah Produk </b> </span>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pengguna</h4>
                            </div>
                            <div class="card-body">
                                <a href="user.php">
                                <div class="alert alert-info">
                                    <button type="button" aria-hidden="true" class="close">
                                        <i class="now-ui-icons design_bullet-list-67"></i>
                                    </button>
                                    <span>
                                        <b> List Pengguna </b></span>
                                </div>
                                </a>
                                <a href="tambahuser.php">
                                <div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">
                                        <i class="now-ui-icons location_pin"></i>
                                    </button>
                                    <span>
                                        <b> Tambah Pengguna</b> </span>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Transaksi</h4>
                            </div>
                            <div class="card-body">
                                <a href="transaksi.php">
                                <div class="alert alert-info">
                                    <button type="button" aria-hidden="true" class="close">
                                        <i class="now-ui-icons design_bullet-list-67"></i>
                                    </button>
                                    <span>
                                        <b> List Transaksi </b></span>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed by
                        <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?= base_url('../assets/js/core/jquery.min.js')?>"></script>
<script src="<?= base_url('../assets/js/core/popper.min.js')?>"></script>
<script src="<?= base_url('../assets/js/core/bootstrap.min.js')?>"></script>
<script src="<?= base_url('../assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>

</html>
