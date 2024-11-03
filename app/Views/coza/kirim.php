<?php
    $conn = mysqli_connect('localhost','root','','toko');

    $pulau = $_POST["pulau"];
    $ukuran = $_POST["ukuran"];
    $warna = $_POST["warna"];
    $harga = $_POST["harga"];
    $quantity = $_POST["num-product"];
    $images = $_POST["image"];
    $total = $_POST["num-product"] * $_POST["harga"];

    if(isset($_POST)){
        $sql="update kirim set nama='$_POST[nama]',notelp='$_POST[notelp]',pulau='$_POST[pulau]',kota='$_POST[kota]',alamat='$_POST[alamat]', ongkir='$_POST[ongkir]' where id='$_POST[id]'";
        $query=mysqli_query($conn,$sql);

        header("location:ship.php");
    }
?>