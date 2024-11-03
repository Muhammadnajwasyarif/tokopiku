<?php
    $conn = mysqli_connect('localhost','root','','toko');

if(isset($_POST)){
	$sql="update kirim set nama='$_POST[nama]', notelp='$_POST[notelp]', pulau='$_POST[pulau]', kota='$_POST[kota]', alamat='$_POST[alamat]' where id='$_POST[xid]'";
	$query=mysqli_query($conn,$sql);
}

header("location:user.php");
   ?>