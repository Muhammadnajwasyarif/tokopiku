<?php
    $conn = mysqli_connect('localhost','root','','toko');

    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $ukuran = $_POST["ukuran"];
    $warna = $_POST["warna"];
    $harga = $_POST["harga"];
    $quantity = $_POST["jumlah"];
    $images = $_POST["image"];
    $idprod = $_POST["idprod"];
    $total = $harga * $quantity;

    $query_sql = "INSERT INTO produk (nama, ukuran, warna, harga, gambar, idprod)
              VALUES ('$nama', '$ukuran', '$warna', '$harga', '$images','$idprod')";

    if ($conn->query($query_sql) === TRUE) {
    // Mendapatkan ID pesanan yang baru saja disisipkan

    echo '<script>alert("Berhasil menambahkan produk")</script>';

    } else {
        echo "Error: " . $query_sql . "<br>" . $conn->error;
    }
    header("location:produk.php");
?>