<?php include("connect.php"); ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>SKKP</title>
        <link rel="icon" type="image/png" href="images/logo.png"/>
        
        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
    </head>

   <body>
   <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/Logo.png" class="logo img-fluid" alt="logoskkp">
                    <span>
                        SKKP
                        <small>Kementerian Kelautan dan Perikanan RI</small>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="#top">Beranda</a>
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link click-scroll" href="lowongan.php">Lowongan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="daftar.php">Daftar Seleksi</a>
                        </li>

                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section class="hero-section hero-section-full-height">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-12 p-0">
                            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/slide/slides1.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>SKKP</h1>
                                            
                                            <p>Laman pendaftaran CPNS <br> Kementerian Kelautan dan Perikanan RI</p>
                                            </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/slide/slides2.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Kegiatan</h1>
                                            
                                            <p>Pelaksanaan tes CPNS KKP tahun 2019</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/slide/slides3.png" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Dibuka!</h1>
                                            
                                            <p>Pendaftaran CPNS KKP untuk Provinsi Jawa Timur. </br>Klik gambar untuk melihat jabatan yang dibuka</p>
                                        </div> 
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">Halo, <?php echo $_SESSION['username']; ?>!</h2>
                        </div>

                        <div class="col-lg-5 col-12">
                            <a href="#" class="me-4">Cek status berkasmu sekarang!</a>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="section_3">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-8 col-md-10 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <!--<img src="images/kartu tes.jpg" class="custom-block-image img-fluid" alt="">-->

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Kartu Ujian</h5>

                                        <?php
                                            include "connect.php";
                                            
                                            $id=$_SESSION['id_user'];

                                            $sql = "select status from berkas where id_user=$id";
                                            $query=$pdo->prepare($sql);
                                            $query->execute();

                                            while($data=$query->fetch()){
                                                if($data['status']=="belum terverifikasi"){
                                                    echo"<p>Kartu ujian akan tersedia pada saat seluruh berkas telah terverifikasi dan dinyatakan lulus oleh panitia.</p>";
                                                } else if($data['status']=="sudah terverifikasi"){
                                                    echo"<p>Selamat, berkasmu sudah terverifikasi!</p>";
                                                    echo"<a href='tempatujian.php?id=$id' class='custom-btn btn'>Pilih Jadwal dan Lokasi Ujian</a>";
                                                }
                                            }
                                        ?>

                                    </div>

                                    <?php echo"<a href='detail_cetak.php?id=$id' class='custom-btn btn'>Download kartu ujian</a>"; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 d-flex flex-wrap">
                        
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-geo-alt me-2"></i>
                            Jl. Medan Merdeka Timur No. 16, Jakarta Pusat
                        </p>

                        <p class="d-flex mb-0">
                            <i class="bi-laptop me-2"></i>

                            <a href="https://kkp.go.id/">
                                kkp.go.id
                            </a>
                        </p>
                        
                    </div>
                

                    <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="https://twitter.com/kkpgoid" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.facebook.com/KementerianKelautandanPerikananRI/" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.instagram.com/kkpgoid/" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="mailto:humas@kkp.go.id" class="social-icon-link bi-envelope"></a>
                            </li>
                        </ul>
                    </div>

                </br>
                
                

                </div>
            </div>
        </header>

        <footer class="site-footer-bottom">
                <div class="container">
                    <div class="copyright">
                        
                        <p class="copyright-text mb-0">© Copyright 2022 <a href="https://kkp.go.id/">Kementerian Kelautan dan Perikanan RI. All Rights Reserved</a>
                        
                    </div>
                </div>
        </footer> 

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>