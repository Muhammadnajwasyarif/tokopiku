<?php
    $conn = mysqli_connect('localhost','root','','toko');

    if(isset($_GET['nama'])){
        $nim = $_GET['nama'];
        $query = mysqli_query($conn,"delete from produk where nama='".$nim."'");
        if($query){
        header('location:produk.php');
        }  else {
            header('location:produk.php');
        }
    }

?>