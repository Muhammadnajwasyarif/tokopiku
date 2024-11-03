<?php
    $conn = mysqli_connect('localhost','root','','toko');

        $query = mysqli_query($conn,"delete from beli");
        if($query){
        header('location:index.php');
        }  else {
            header('location:index.php');
        }

?>