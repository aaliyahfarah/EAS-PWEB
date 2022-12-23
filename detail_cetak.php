<?php 
include "connect.php";
require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();



$html = '<style>
table, th, td{
    padding: 7px;
    vertical-align: top;
}
</style>

<img src="images/logo.png" style="float: left; height: 60px">

<div style="margin-left: 20px">
    <div style="font-size: 18px">KARTU PESERTA UJIAN CPNS 2022</div>
    <div style="font-size:20px">FORMASI LULUSAN TERBAIK</div>
    <div style="font-size:12px">Kementerian Kelautan dan Perikanan RI</div>
</div>

<hr style="border: 0.5px solid black; margin: 10px 5px 10px 5px;">';

$id_user = $_GET['id'];

$sql = "SELECT u.nik, u.nama, u.jenis_kelamin, u.tempat_lahir, u.tanggal_lahir, b.pendidikan, b.jabatan, b.pasfoto from user u join berkas b
on u.id_user=b.id_user where u.id_user=$id_user";
$query = mysqli_query($mysqli, $sql);
$result = mysqli_fetch_array($query);

$sql2 = "SELECT u.nomor_ujian, u.id_jadwal, j.jd_lokasi from ujian u join jadwal j on u.id_jadwal=j.id_jadwal where u.id_user=$id_user";
$query2 = mysqli_query($mysqli, $sql2);
$result2 = mysqli_fetch_array($query2);

$html .= '<table width="100%">
    <tr>
        <td width="20%">Instansi</td>
        <td width="1%">:</td>
        <td width="60%">Kementerian Kelautan dan Perikanan RI</td>
        <td rowspan="9"><img src="upload/pas-foto/'.$result['pasfoto'].'" width="180px" height="200px"></td>
    </tr>
    <tr>
        <td>Lokasi</td>
        <td>:</td>
        <td>'.$result2['jd_lokasi'].'</td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td>'.$result['nik'].'</td>
    </tr>
    <tr>
        <td>Nomor Peserta</td>
        <td>:</td>
        <td>'.$result2['nomor_ujian'].'</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>'.$result['nama'].'</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>'.$result['jenis_kelamin'].'</td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>'.$result['tempat_lahir'].'</td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td>'.$result['tanggal_lahir'].'</td>
    </tr>
    <tr>
        <td>Kualifikasi Pendidikan</td>
        <td>:</td>
        <td>'.$result['pendidikan'].'</td>
    </tr>
    <tr>
        <td>Formasi Jabatan</td>
        <td>:</td>
        <td>'.$result['jabatan'].'</td>
    </tr>
</table>

';


$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("kartu ujian.pdf", array("Attachment"=>0));

?>

