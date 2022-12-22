<?php 

session_start(); 

include_once ("connect.php");

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";

$query=$pdo->prepare($sql);
$query->bindparam(':username',$username);
$query->bindparam(':password',$password);
$query->execute();

$result=$query->fetch();

if($query->rowCount()>0){

    if($result['level']=="cp"){
        $_SESSION['id_user']=$result['id_user'];
        $_SESSION['username']=$username;
        $_SESSION['level'] = "calon pegawai";
        header('Location:dashboard.php?id='.$_SESSION['id_user']);
    }
    elseif($result['level']=="admin"){
        $_SESSION['id_user']=$result['id_user'];
        $_SESSION['username']=$username;
        $_SESSION['level'] = "admin";
        header('Location:admin/index.php');
    }
    
}
else{
    echo "<script>alert('Username atau Password yang anda masukkan SALAH!');</script>";
    header("location:index.php?pesan=gagal");
}

?>