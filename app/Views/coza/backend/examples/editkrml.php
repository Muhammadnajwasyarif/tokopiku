<?php

    $conn = mysqli_connect("localhost","root","","polmil");
    $query = "SELECT * FROM abri WHERE nama='" . $_GET['nama'] . "'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../gambar/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Edit Koramil</title>
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
<script
src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=">

</script>

<script>
var map;
var myCenter=new google.maps.LatLng(-7.244735, 110.4329);
var marker;
var awal=0;

var mapProp = {
  center:myCenter,
  zoom:12,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

function initialize()
{

  map = new google.maps.Map(document.getElementById("petaku"),mapProp);
  
    google.maps.event.addListener(map,'click',function(event){

	  if(awal==0){
	  placeMarker(event.latLng);
	  }else{
	  changeMarker(event.latLng);
	  }
	  awal=1;
	
      setLatLng(event.latLng);
    });
  
}

function setLatLng(lokasi){
	
	

    $("#x").val(lokasi.lat());
    $("#y").val(lokasi.lng());
	
}

function placeMarker(location) {  
  marker = new google.maps.Marker({
    position: location,
    map: map,
  });
}

function changeMarker(location) {  
  marker.setPosition(location);
}


</script>

</head>

<body class="" onload="initialize()">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    MR
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Majiid Reza
                </a>
            </div>
            <div class="sidebar-wrapper">
            <ul class="nav">
                    <li>
                        <a href="../examples/dashboard.html">
                            <i class="now-ui-icons design_app"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li>
                        <a href="polsek.php">
                            <i class="now-ui-icons business_briefcase-24"></i>
                            <p>Polsek</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="koramil.php">
                            <i class="now-ui-icons business_bank"></i>
                            <p>Koramil</p>
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
                        <a class="navbar-brand" href="#pablo">EDIT KORAMIL</a>
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
                                <h4 class="card-title"> Edit Data Koramil dan Jumlah Personel</h4>
                            </div>
                                <div class="table-responsive">
                                    <table class="table" style="margin-left:15px;">
                                        <tbody>
                                        <form action="updatekrml.php" method="post" name="koramil">
                                        <tr>
                                            <input type="hidden" name="xnama" value="<?php echo $data['nama']; ?>"/>
                                            <td><label for="pesan" style="font-size:15px;color:black">Nama Koramil</label></td>
                                            <td>: <input type="text" id="nm" name="nm" size="50" disabled value="<?php echo $data['nama']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Alamat</label></td>
                                            <td>: <input type="text" id="almt" name="almt" size="50" value="<?php echo $data['alamat']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Desa</label></td>
                                            <td>: <input type="text" id="ds" name="ds" size="50" value="<?php echo $data['desa']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Kecamatan</label></td>
                                            <td>: <input type="text" id="kcmtn" name="kcmtn" size="50" value="<?php echo $data['kecamatan']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Kategori</label></td>
                                            <td>: <input type="text" id="ktgr" name="ktgr" size="50" value="<?php echo $data['kategori']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Jumlah</label></td>
                                            <td>: <input type="text" id="jml" name="jml" size="50" value="<?php echo $data['jumlah']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Latitude</label></td>
                                            <td>: <input type="text" id="x" name="ltd" size="50" value="<?php echo $data['lat']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pesan" style="font-size:15px;color:black">Longitude</label></td>
                                            <td>: <input type="text" id="y" name="lnd" size="50" value="<?php echo $data['lng']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="reset" value="RESET"></td>
                                            <td><input type="submit" value="KIRIM"></td>
                                        </tr>
                                        </form>
                                        </tbody>
                                    </table>
                                </div>
                            <div class="card-body ">
                                <div id="petaku" style="width:100%;height:400px">

                                </div>
                                </div>
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
