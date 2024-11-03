
<?php
    $conn = mysqli_connect("localhost","root","","toko");
    $query = "SELECT beli.user,beli.images, beli.produk, beli.ukuran, beli.warna, beli.harga, beli.jumlah, kirim.nama, kirim.notelp, kirim.pulau, kirim.kota, kirim.alamat, kirim.ongkir FROM beli CROSS JOIN kirim CROSS JOIN produk WHERE produk.idprod=beli.idprod AND beli.user=kirim.id;";
    $result = mysqli_query($conn, $query);
    $produk = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coza Store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="/login.php" class="flex-c-m trans-04 p-lr-25">
							Admin
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="/images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="/">Home</a>
								<ul class="sub-menu">
									<li><a href="index.html">Homepage 1</a></li>
									<li><a href="home-02.html">Homepage 2</a></li>
									<li><a href="home-03.html">Homepage 3</a></li>
								</ul>
							</li>

							<li>
								<a href="produk.php">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="fitur.php">Features</a>
							</li>

							<li>
								<a href="blog.php">Blog</a>
							</li>

							<li>
								<a href="tentang.php">About</a>
							</li>

							<li>
								<a href="kontak.php">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<?php
                    $sql3 = mysqli_query($conn, "SELECT count(*) as jml FROM beli");
                    while($data3 = mysqli_fetch_array($sql3)) {
                    ?>
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php echo $data3['jml'];?>">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
					<?php
					}
					?>
						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="/produk">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	

<br>
<br>
<br>
<br>

<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="fitur.php" class="stext-109 cl8 hov-cl1 trans-04">
				Keranjang
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="ship.php" class="stext-109 cl8 hov-cl1 trans-04">
				Data Pengiriman
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
            <span class="stext-109 cl4">
				Invoice
			</span>
		</div>
	</div>
		
    

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
						Detail Transaksi
						</h4>
			<div class="row">
				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50" >
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<span class="mtext-106 cl2" name="hrg">
						Data Barang
						</span>
				
                        <br>
                        <br>
                                        <label for="pulau">Produk</label>
                                        <?php
                    $sql3 = mysqli_query($conn, "SELECT produk,ukuran,warna,images, jumlah, harga, total FROM beli");
                    while($data3 = mysqli_fetch_array($sql3)) {
                    ?>
                        <img src="/images/<?=$data3['images'];?>" width=100px>
                        <h5><?= $data3['produk'];?></h5>
                        <p>Warna : <?= $data3['warna'];?></p>
                        <p>Ukuran : <?= $data3['ukuran'];?></p>
                        <b>Harga : Rp<?= number_format($data3['harga'],0,',','.'); ?></b>
                        <p>Jumlah : <?= $data3['jumlah'];?></p>
						<b>Sub Total : Rp<?= number_format($data3['total'],0,',','.'); ?></b>
                        
                        <hr>
                    <?php
                    }
                    ?>
                    <div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2" text-align="right">
                                <?php
                                $sql3 = mysqli_query($conn, "SELECT sum(total) as total FROM beli");
                                while($data3 = mysqli_fetch_array($sql3)) {
                                ?>
									: Rp<?= number_format($data3['total'],0,',','.'); ?>
                                    <?php
                                    }
                                    ?>
								</span>
							</div>
                            <div class="size-208">
								<span class="stext-110 cl2">
									Ongkir
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2" text-align="right">
									: Rp<?= number_format($produk['ongkir'],0,',','.'); ?>
								</span>
							</div>
						</div>
                        <div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
                                <?php
                                $sql3 = mysqli_query($conn, "SELECT (sum(total)+ongkir) as total FROM beli cross join kirim where beli.user=kirim.id");
                                while($data3 = mysqli_fetch_array($sql3)) {
                                ?>
									: Rp<?= number_format($data3['total'],0,',','.'); ?>
								</span>
                                <?php
                                }
                                ?>
							</div>
						</div>
					</div>
                    
				</div>
                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50" >
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
		
						</h4>

						<span class="mtext-106 cl2" name="hrg">
						Data Pelanggan 
						</span>
				
                        <br>
                        <br>
                                        <label for="pulau">Nama</label>
										<input class="mtext-104 cl3 txt-left num-product" type="text" name="nama" disabled size="30" value="<?= $produk['nama'];?>">
                                        <br>
                                        <label for="kota">No. Telepon</label>
										<input class="mtext-104 cl3 txt-left num-product" type="text" name="notelp" disabled value="<?= $produk['notelp'];?>">
                                        <br>
                                        <label for="pulau">Pulau</label>
										<input class="mtext-104 cl3 txt-left num-product" type="text" name="pulau" disabled size="30" value="<?= $produk['pulau'];?>">
                                        <br>
                                        <label for="kota">kota</label>
										<input class="mtext-104 cl3 txt-left num-product" type="text" name="kota" disabled value="<?= $produk['kota'];?>">
                                        <br>
                                        <label for="alamat">Alamat</label>
										<input class="mtext-104 cl3 txt-left num-product" type="text" name="alamat" disabled value="<?= $produk['alamat'];?>">
									<br>
					</div>
				</div>
                
			</div>
			<form action="saveprod.php" method="post">
			<input type="hidden" name="id" > 
			<input type="hidden" name="user" value=<?= $produk['user'];?>> 
			<input type="hidden" name="nama" value="<?= $produk['nama'];?>"> 
			<input type="hidden" name="notelp" value="<?= $produk['notelp'];?>"> 
			<input type="hidden" name="pulau" value="<?= $produk['pulau'];?>"> 
			<?php
			$sql3 = mysqli_query($conn, "SELECT (sum(total)+ongkir) as total FROM beli cross join kirim where beli.user=kirim.id");
			while($data3 = mysqli_fetch_array($sql3)) {
				?>
			<input type="hidden" name="total" value="<?=$data3['total'];?>">
			</span>
			<?php
			}
			?>
			<input type="hidden" name="keterangan" value="Belum Di Bayar">
			<?php
                    $sql3 = mysqli_query($conn, "SELECT produk,ukuran,warna,images, jumlah, harga, total FROM beli");
                    while($data3 = mysqli_fetch_array($sql3)) {
                    ?>
					<input type="hidden" name="produk" value="<?= $data3['produk'];?>"> 
					<input type="hidden" name="ukuran" value="<?= $data3['ukuran'];?>"> 
					<input type="hidden" name="warna" value="<?= $data3['warna'];?>"> 
					<input type="hidden" name="jumlah" value="<?= $data3['jumlah'];?>"> 
					<input type="hidden" name="harga" value="<?= $data3['harga'];?>"> 
					<input type="hidden" name="images" value="<?= $data3['images'];?>">
                    <?php
                    }
                    ?>  
            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
				Konfirmasi
			</button>
		</form>
		</div>

	</section>


<!--===============================================================================================-->	
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/slick/slick.min.js"></script>
	<script src="/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>

</body>
</html>
	
	