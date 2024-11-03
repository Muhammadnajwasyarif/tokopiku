<?php
    $conn = mysqli_connect('localhost','root','','toko');

    if(isset($_GET['produk'])){
        $nim = $_GET['produk'];
        $query = mysqli_query($conn,"delete from beli where produk='".$nim."'");
        if($query){
        header('location:fitur.php');
        }  else {
            header('location:fitur.php');
        }
    }

?>