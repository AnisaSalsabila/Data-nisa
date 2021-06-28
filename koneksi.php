<?php

    $hostname   = "localhost";
    $username   = "root";
    $password   = " ";
    $dbname     = "4p";

    //membuat koneksi

    $konek = mysqli_connect($hostname, $username, $password, $dbname);

    //cek koneksi

    if(!$konek)
    {
        die("Koneksi Gagal : ". mysqli_connect_error());
    }

    echo "Yee Berhasil";

?>