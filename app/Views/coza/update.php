<?php
    $conn = mysqli_connect('localhost','root','','toko');
    $nama = $_POST["nama"];
    $user = $_POST["user"];
    $idprod = $_POST["idprod"];
    $ukuran = $_POST["ukuran"];
    $warna = $_POST["warna"];
    $harga = $_POST["harga"];
    $quantity = $_POST["num-product"];
    $images = $_POST["image"];
    $total = $_POST["num-product"] * $_POST["harga"];
    if(isset($_POST)){
        $sql="update beli set user='$_POST[user]',idprod='$_POST[idprod]',ukuran='$_POST[sz]',warna='$_POST[warna]',harga='$_POST[harga]',jumlah='$_POST[jumlah]',images='$_POST[image]',total='$_POST[jumlah]'*'$_POST[harga]' where produk='$_POST[nama]'";
        $query=mysqli_query($conn,$sql);
        header("location:fitur.php");
    }    
?>