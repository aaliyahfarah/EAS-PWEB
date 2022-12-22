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
                <a class="navbar-brand" href="index.php">
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
                            <a class="nav-link click-scroll" href="index.php">Beranda</a>
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link click-scroll" href="lowongan.php">Lowongan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#">Daftar Seleksi</a>
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
                        <form class="custom-form volunteer-form mb-5 mb-lg-0" action="proses-daftar.php" method="post" enctype="multipart/form-data">
                                
                            <h3 class="mb-4">Daftar</h3></br>
                                <div class="container">
                                    <form>
                                        <!-- <label>NIK</label><br> -->
                                        <label>Kualifikasi Pendidikan</label>
                                        <input name="pendidikan" type="text" class="form-control" placeholder="Kualifikasi Pendidikan" required><br>

                                        <label>Formasi Jabatan</label>
                                        <input name="jabatan" type="text" class="form-control" placeholder="Formasi Jabatan" required><br>

                                        <label>Upload Kartu Keluarga</label>
                                        <div class="input-group input-group-file">
                                            <input name="kk" type="file" class="form-control" id="inputGroupFile03">
                                            <!-- label sesuai nama upload -->
                                            <label class="input-group-text" for="inputGroupFile03">Upload KK</label>

                                            <i class="bi-cloud-arrow-up ms-auto"></i>
                                        </div></br>

                                        <label>Upload Akta Kelahiran</label>
                                        <div class="input-group input-group-file">
                                            <input name="akta" type="file" class="form-control" id="inputGroupFile04">
                                            <!-- label sesuai nama upload -->
                                            <label class="input-group-text" for="inputGroupFile04">Upload Akta Kelahiran</label>

                                            <i class="bi-cloud-arrow-up ms-auto"></i>
                                        </div></br>

                                        <label>Surat Keterangan Kelakuan Baik</label>
                                        <div class="input-group input-group-file">
                                            <input name="skkb" type="file" class="form-control" id="inputGroupFile05">
                                            <!-- label sesuai nama upload -->
                                            <label class="input-group-text" for="inputGroupFile05">Upload SKKB</label>

                                            <i class="bi-cloud-arrow-up ms-auto"></i>
                                        </div></br>

                                        <label>Pas Foto</label>
                                        <div class="input-group input-group-file">
                                            <input name="pas" type="file" class="form-control" id="inputGroupFile06">
                                            <!-- label sesuai nama upload -->
                                            <label class="input-group-text" for="inputGroupFile06">Upload Pas Foto 3x4 dengan background merah</label>

                                            <i class="bi-cloud-arrow-up ms-auto"></i>
                                        </div></br>

                                        <label>CV</label>
                                        <div class="input-group input-group-file">
                                            <input name="cv" type="file" class="form-control" id="inputGroupFile07">
                                            <!-- label sesuai nama upload -->
                                            <label class="input-group-text" for="inputGroupFile07">Upload CV</label>

                                            <i class="bi-cloud-arrow-up ms-auto"></i>
                                        </div></br>



                                        <!-- klo berhasil ke beranda -->
                                        <button name="daftar" type="submit" class="form-control">Daftar</button>
                                    </form>     
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