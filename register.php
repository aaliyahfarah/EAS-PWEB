<?php

include("connect.php");

// ambil data dari formulir
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat_lahir'];
$tanggal = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$ktp = $_FILES['ktp']['name'];
$tmp = $_FILES['ktp']['tmp_name'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$level = "cp";

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotoktp = date('dmYHis').$ktp;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotoktp;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO user(nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, phone, email, ktp, username, password, level) 
VALUES(:nik,:nama,:tempat,:tanggal,:jk,:phone,:mail,:ktp,:uname,:pass,:lvl)");
$sql->bindParam(':nik', $nik);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':tempat', $tempat);
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':jk', $jk);
$sql->bindParam(':phone', $phone);
$sql->bindParam(':mail', $mail);
$sql->bindParam(':ktp', $fotoktp);
$sql->bindParam(':uname', $uname);
$sql->bindParam(':pass', $pass);
$sql->bindParam(':lvl', $level);
$sql->execute(); // Eksekusi query insert

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
    }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='registrasi.php'>Kembali Ke Form</a>";
    }
}else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='registrasi.php'>Kembali Ke Form</a>";
}

?>