<?php

    $conn = mysqli_connect("localhost","root","","toko");
    $query = "SELECT * from transaksi where  idtrans='" . $_GET['idtrans'] . "'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../images/icons/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Edit Produk</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <script src="titik/jquery.min.js"></script>

</head>

<body class="" onload="initialize()">
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
                    <li>
                        <a href="dashboard.html">
                            <i class="now-ui-icons design_app"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li >
                        <a href="produk.php">
                            <i class="now-ui-icons business_briefcase-24"></i>
                            <p>Produk</p>
                        </a>
                    </li>
                    <li >
                        <a href="user.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="transaksi.php">
                            <i class="now-ui-icons business_bank"></i>
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
                        <a class="navbar-brand" href="#pablo">EDIT PRODUK</a>
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
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title"> Edit Data Transaksi</h4>
                            </div>
                                <div class="table-responsive">
                                    <table class="table" style="margin-left:15px;">
                                        <tbody>
                                        <form action="updateuser.php" method="post" name="polsek">
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Id Transaksi</label></td>
                                            <td>: <?php echo $data['idtrans']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Nama Pemesan</label></td>
                                            <td>: <?php echo $data['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">No. Telepon</label></td>
                                            <td>: <?php echo $data['notelp']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Pulau</label></td>
                                            <td>: <?php echo $data['pulau']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Detail Produk :</label></td>
                                        </tr>
                                        <?php
                                        $sql3 = mysqli_query($conn, "SELECT produk,ukuran,warna,images, jumlah, harga, total FROM beli");
                                        while($data3 = mysqli_fetch_array($sql3)) {
                                        ?>
                                        <tr>
                                            <td><img src="/images/<?=$data3['images'];?>" width=100px>
                                        
                                        </td>  
                                        </tr>
                                        <tr>
                                            <td><p><?= $data3['produk'];?></p></td>
                                        </tr>
                                        <tr>
                                        <td><p>Warna : <?= $data3['warna'];?></p></td>
                                        </tr>
                                        <tr>
                                        <td><p>Ukuran : <?= $data3['ukuran'];?></p></td>
                                        </tr>
                                        <tr>
                                        <td><b>Harga : Rp<?= number_format($data3['harga'],0,',','.'); ?></b></td>
                                        </tr>
                                        <tr>
                                        <td><p>Jumlah : <?= $data3['jumlah'];?></p></td>
                                        </tr>
                                        <tr>
                                        <td><b>Sub Total : Rp<?= number_format($data3['total'],0,',','.'); ?></b></td>
                                        </tr>
                                        <?php }
                                        ?>
                                        <?php
                                    $sql3 = mysqli_query($conn, "SELECT sum(total) as total FROM beli");
                                    while($data3 = mysqli_fetch_array($sql3)) {
                                    ?>
                                    <tr>
									<td>Sub Total </td>
                                    <td>: <b> Rp<?= number_format($data3['total'],0,',','.'); ?></b></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                            <?php
                                        $sql3 = mysqli_query($conn, "SELECT ongkir FROM kirim");
                                        while($data3 = mysqli_fetch_array($sql3)) {
                                        ?>
                                    <tr>
                                        <td>Ongkir</td>
                                        <td>: <b> Rp<?= number_format($data3['ongkir'],0,',','.'); ?></b></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                $sql3 = mysqli_query($conn, "SELECT (sum(total)+ongkir) as total FROM beli cross join kirim where beli.user=kirim.id");
                                while($data3 = mysqli_fetch_array($sql3)) {
                                ?>
                                    <tr>
                                        <td>Total</td>
                                        <td>: <b>Rp<?= number_format($data['total'],0,',','.'); ?></b></td>
                                    </tr>
                                    <?php
                                }
                                ?>
								</span>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Keterangan</label></td>
                                            <td>: <?php echo $data['ket']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" value="Update"></td>
                                            <td><a href="hapustrans.php?idtrans=<?php echo $data['idtrans'];?>">Hapus</a></td>
                                            <td><a href="transaksi.php">Kembali</a></td>
                                        </tr>
                                        </form>
                                        </tbody>
                                    </table>
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
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->

<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initGoogleMaps();
    });
</script>

</html>
