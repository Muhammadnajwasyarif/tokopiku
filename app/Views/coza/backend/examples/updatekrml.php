<?php
    $conn = mysqli_connect('localhost','root','','polmil');

if(isset($_POST)){
	$sql="update abri set alamat='$_POST[almt]',desa='$_POST[ds]',kecamatan='$_POST[kcmtn]',kategori='$_POST[ktgr]',jumlah='$_POST[jml]',lat='$_POST[ltd]',lng='$_POST[lnd]' where nama='$_POST[xnama]'";
	$query=mysqli_query($conn,$sql);
}

header("location:koramil.php");
   ?>