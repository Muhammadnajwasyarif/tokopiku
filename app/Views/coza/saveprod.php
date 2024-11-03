<?php
    $conn = mysqli_connect('localhost','root','','toko');

    $id = $_POST["id"];
    $us = $_POST["user"];
    $nama = $_POST["nama"];
    $ntlp = $_POST["notelp"];
    $plw = $_POST["pulau"];
    $total = $_POST["total"];
    $ket = $_POST["keterangan"];


    $query_sql = "INSERT INTO transaksi (user, nama, notelp, pulau, total, ket)
              VALUES ('$us', '$nama', '$ntlp', '$plw', '$total', '$ket')";

    if ($conn->query($query_sql) === TRUE) {
    // Mendapatkan ID pesanan yang baru saja disisipkan

    echo '<script>alert("Berhasil menambahkan produk")</script>';

    } else {
        echo "Error: " . $query_sql . "<br>" . $conn->error;
    }
    header("location:savebelanja.php");
?>