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

                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="masuk.php">Masuk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section class="volunteer-section section-padding">
                <div class="container">
                    <div class="row">
                        <form class="custom-form volunteer-form mb-5 mb-lg-0" action="register.php" method="POST" enctype="multipart/form-data">
                                
                            <h3 class="mb-4">Buat Akun SKKP 2022</h3></br>
                                <div class="container">
                                    <form>
                                        <!-- <label>NIK</label><br> -->
                                        <label>Nomor Induk Kependudukan (sesuai KTP)</label>
                                        <input name="nik" type="text" class="form-control" placeholder="Masukkan Nomor Induk Kependudukan" required><br>

                                        <label>Nama Lengkap (sesuai KTP)</label>
                                        <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Lengkap" required><br>

                                        <label>Tempat Lahir (sesuai KTP)</label>
                                        <input name="tempat_lahir" type="text" class="form-control" placeholder="Masukkan Tempat Lahir" required><br>

                                        <label for="birthday">Tanggal Lahir (sesuai KTP)</label>
                                        <input name="tanggal_lahir" type="date" class="form-control" id="birthday" name="birthday" placeholder="mm-dd-yy" required><br>                                           

                                        <label>Jenis Kelamin</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault9" value="pria">
                                            <label class="form-check-label" for="flexRadioDefault9">
                                                Pria
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault10" value="wanita">
                                            <label class="form-check-label" for="flexRadioDefault10">
                                                Wanita
                                            </label>
                                        </div><br/>
                                        
                                        <label>Nomor Handphone Aktif</label>
                                        <input name="phone" type="tel" class="form-control" placeholder="Masukkan Nomor Handphone" required></br>
                                        
                                        <label>Email Pribadi Aktif</label>
                                        <input name="mail" type="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Masukkan Alamat Email" required></br>

                                        <label>Upload KTP</label>
                                        <div class="input-group input-group-file">
                                            <input name="ktp" type="file" class="form-control" id="inputGroupFile02">
                                            <!-- label sesuai nama upload -->
                                            <label class="input-group-text" for="inputGroupFile02">Upload KTP</label>

                                            <i class="bi-cloud-arrow-up ms-auto"></i>
                                        </div></br>

                                        <label>Username</label>
                                        <input name="uname" type="text" class="form-control" placeholder="Masukkan Username" required><br>

                                        <label>Password</label>
                                        <input name="pass" type="password" class="form-control" placeholder="Masukkan Password" required><br>


                                        <!-- klo berhasil ke beranda -->
                                        <button type="submit" class="form-control">Registrasi</button>
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