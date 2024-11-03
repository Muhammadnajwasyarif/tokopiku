<?php
    $conn = mysqli_connect('localhost','root','','toko');

    $id = $_POST["idpel"];
    $nama = $_POST["nama"];
    $warna = $_POST["notelp"];
    $harga = $_POST["pulau"];
    $quantity = $_POST["jumlah"];
    $images = $_POST["kota"];
    $idprod = $_POST["alamat"];

    $query_sql = "INSERT INTO kirim (nama, id, notelp, pulau, kota, alamat)
              VALUES ('$nama', '$id', '$warna', '$harga', '$images','$idprod')";

    if ($conn->query($query_sql) === TRUE) {
    // Mendapatkan ID pesanan yang baru saja disisipkan

    echo '<script>alert("Berhasil menambahkan produk")</script>';

    } else {
        echo "Error: " . $query_sql . "<br>" . $conn->error;
    }
    header("location:user.php");
?>