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
        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/Logo.png" class="logo img-fluid" alt="Kind Heart Charity">
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
            <section class="volunteer-section section-padding">
                <div class="container">
                    <div class="row">
                        <?php
                            $id_user = $_GET['id'];

                        echo"<form class='custom-form volunteer-form mb-5 mb-lg-0' action='proses-jadwal.php?id_user=$id_user' method='POST' enctype='multipart/form-data'>";
                        ?> 
                            <h3 class="mb-4">Pilih lokasi Ujian</h3></br>
                                <div class="container">
                                        <form>
                                    
                                        <select class="dropdown-ujian" name="jadwal">
                                        <?php
                                            include "connect.php";
                                            
                                            function debug_to_console($data) {
                                                $output = $data;
                                                if (is_array($output))
                                                    $output = implode(',', $output);
                                            
                                                echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
                                            }

                                            $sql = "SELECT * from jadwal";
                                            $query=$pdo->prepare($sql);
                                            $query->execute();

                                            while($data=$query->fetch()){
                                                $id_jadwal=$data['id_jadwal'];
                                                echo"<option value='".$id_jadwal."'>".$data['jd_lokasi']." - ".$data['jd_tanggal']." - ".$data['jd_waktuMulai']."</option>";
                                            }
                                        ?>
                                        </select> 

                                    </form>  </br></br>

                                <button type="submit" class="form-control">Simpan Jadwal Ujian</button>
                                    
                            </div> 

                        </form>    
                    
                    </div>    
                </div>
            </section>
        </main>
        
        <footer class="site-footer-bottom">
            <div class="container">
                <div class="copyright">
                    
                    <p class="copyright-text mb-0">© Copyright 2022 <a href="https://kkp.go.id/">Kementerian Kelautan dan Perikanan RI. All Rights Reserved</a>
                    
                </div>
            </div>
        </footer> 
    </body>