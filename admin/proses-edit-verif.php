<?php
    // Load file koneksi.php
    include "../connect.php";

    $id = $_GET['id'];

    $sql = "update berkas set status='sudah terverifikasi' where id_daftar=$id";
    $query=$pdo->prepare($sql);
    $query->execute();

    echo "<script>alert('Berkas berhasil terverifikasi!');</script>";
    header("location: berkas.php");
