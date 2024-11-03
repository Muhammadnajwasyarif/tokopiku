<?php
    $conn = mysqli_connect('localhost','root','','toko');

if(isset($_POST)){
	$sql="update produk set nama='$_POST[nama]', ukuran='$_POST[ukuran]', warna='$_POST[warna]', harga='$_POST[harga]', gambar='$_POST[gambar]' where idprod='$_POST[xprod]'";
	$query=mysqli_query($conn,$sql);
}

header("location:produk.php");
   ?>