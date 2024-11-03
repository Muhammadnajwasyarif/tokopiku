<?php
    $conn = mysqli_connect('localhost','root','','toko');

    if(isset($_GET['idtrans'])){
        $nim = $_GET['idtrans'];
        $query = mysqli_query($conn,"delete from transaksi where idtrans='".$nim."'");
        if($query){
        header('location:transaksi.php');
        }  else {
            header('location:transaksi.php');
        }
    }

?>