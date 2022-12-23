<?php
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
}

include("connect.php");

$id = $_SESSION['id_user'];
$pendidikan = $_POST['pendidikan'];
$jabatan = $_POST['jabatan'];

$kk = $_FILES['kk']['name'];
$tmp_kk = $_FILES['kk']['tmp_name'];
$path_kk = "upload/kk/".$kk;


$akta = $_FILES['akta']['name'];
$tmp_akta = $_FILES['akta']['tmp_name'];
$path_akta = "upload/akta/".$akta;


$skkb = $_FILES['skkb']['name'];
$tmp_skkb = $_FILES['skkb']['tmp_name'];
$path_skkb = "upload/skkb/".$skkb;


$pas = $_FILES['pas']['name'];
$tmp_pas = $_FILES['pas']['tmp_name'];
$path_pas = "upload/pas-foto/".$pas;


$cv = $_FILES['cv']['name'];
$tmp_cv = $_FILES['cv']['tmp_name'];
$path_cv = "upload/cv/".$cv;

move_uploaded_file($tmp_cv, $path_cv);
move_uploaded_file($tmp_akta, $path_akta);
move_uploaded_file($tmp_skkb, $path_skkb);
move_uploaded_file($tmp_pas, $path_pas);
move_uploaded_file($tmp_kk, $path_kk);

$sql = $pdo->prepare("INSERT INTO berkas(id_user, pendidikan, jabatan, kk, akta, skkb, pasfoto, cv, status) 
VALUES(:id,:pend,:jabatan,:kk,:akta,:skkb,:pas,:cv,:status)");
$sql->bindParam(':id', $id);
$sql->bindParam(':pend', $pendidikan);
$sql->bindParam(':jabatan', $jabatan);
$sql->bindParam(':kk', $kk);
$sql->bindParam(':akta', $akta);
$sql->bindParam(':skkb', $skkb);
$sql->bindParam(':pas', $pas);
$sql->bindParam(':cv', $cv);
$sql->bindParam(':status', "belum terverifikasi");
$sql->execute();

if($sql){
    header("location: dashboard.php"); 
}else{
echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
echo "<br><a href='daftar.php'>Ulang</a>";
}

?>