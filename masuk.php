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
<!--

-->

    
    
    <body id="section_1">
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
                            <a class="nav-link custom-btn custom-border-btn btn" href="registrasi.php">Buat Akun</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section class="volunteer-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <form class="custom-form volunteer-form mb-5 mb-lg-0" action="login.php" method="POST" enctype="multipart/form-data">
                                
                                <h3 class="mb-4">Masuk SKKP 2022</h3>
                                    <div class="container">
                                        <form>
                                            <!-- <label>Username</label><br> -->
                                            <input name="username" type="text" class="form-control" placeholder="Masukkan Username" required><br>

                                            <!-- <label>Password</label><br> -->
                                            <input name="password" type="password" class="form-control" placeholder="Masukkan Password" required><br>
                                            <!-- klo berhasil ke beranda -->
                                            <button name="login" type="submit" class="form-control">Log in</button>
                                        </form>     
                                </div> 

                            </form>
                        </div>
                        <div class="col-lg-6 col-10">
                            <img src="images/mascot.png" class="volunteer-image img-fluid" alt="">
                        </div>
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
