<?php

include("connect.php");

$id_user = $_GET['id_user'];
$jadwal = $_POST['jadwal'];

$sql = $pdo->prepare("insert into ujian(id_jadwal, id_user) values (:id_jadwal, :id_user)");
$sql->bindParam(':id_jadwal', $jadwal);
$sql->bindParam(':id_user', $id_user);
$sql->execute();

if($sql){
    header("location: dashboard.php");
}else{
    echo "Maaf, SQL gagal dimuat.";
}