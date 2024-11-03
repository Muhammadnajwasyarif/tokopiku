<?php
    $conn = mysqli_connect('localhost','root','','toko');

    if(isset($_GET['nama'])){
        $nim = $_GET['nama'];
        $query = mysqli_query($conn,"delete from kirim where nama='".$nim."'");
        if($query){
        header('location:user.php');
        }  else {
            header('location:user.php');
        }
    }

?>