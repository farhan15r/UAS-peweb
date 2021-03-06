<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="/style/style.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>KETA TRAVEL | HOME</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark bg-opacity-50">
            <div class="container">
                <a class="navbar-brand" href="/"><strong>KETA TRAVEL</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/packages">TOUR PACKAGE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">ABOUT US</a>
                        </li>
                    </ul>
                    <button class="btn btn-outline-light me-1">SIGN IN</button>
                    <button class="btn btn-outline-light">SIGN UP</button>
                </div>
            </div>
        </nav>
        <!-- end Navbar -->

        <!-- header -->
        <div class="header-bg crop align-items-center">
            <div class="container">
                <div class="row align-items-center text-light" style="min-height: 80vh">
                    <div class="col-md-5 bg-secondary p-4 bg-opacity-75 header-label">
                        
                        <h1>About Us</h1>
                        <p>Keta Travel adalah agen perjalanan online dengan layanan lengkap yang berbasis di Jakarta yang menyediakan layanan manajemen perjalanan untuk rekreasi dan perusahaan. Perusahaan ini didirikan pada tahun 2022 oleh para ahli yang berpengalaman di bidang manajemen perjalanan dan pariwisata dalam memberikan kualitas layanan terbaik kepada pelanggan kami. Paket perjalanan Keta Travel terdiri dari beberapa layanan seperti Penerbangan, Hotel, Kapal pesiar, Transportasi darat dan Wisata. Terdapat banyak paket perjalanan menarik yang disediakan untuk pelanggan kami serta ditargetkan dan dirancang agar sesuai dengan semua Pasar dan budaya perjalanan, dan preferensinya.</p>
                        <button type="button" class="btn btn-danger">Gabung Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- end header -->
        
        <!-- Paket Ungguulan -->
        <div style="background-color: #08c9d3;" class="my-4">
            <div class="py-3">
                <div class="align-items-center p-0">
                    <h2 class="text-center text-white">Tour Package</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pt-2">
                <!-- looping for packages list -->
                <?php $temp = 0 ?>
                <?php foreach ($packages as $package) : ?>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="assets/tour_packages/<?php echo $package['image'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $package['title'] ?></h5>
                            <p class="card-text"><?php echo $package['description'] ?></p>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-info text-white">Register Now</button>
                        </div>
                    </div>
                </div>
                <?php //stop lopping when 3
                if (++$temp > 2) {
                    break;
                }
                ?>
                <?php endforeach ?>
            </div>
        </div>
        <div class="text-center py-4">
            <a class="btn btn-primary text-center" style="margin:auto" href="/packages"><h3>Browse All Tour Package</h3></a>
        </div>
        <!-- end Paket Unggulan -->


        <!-- Testimoni -->
        <div style="background-color: #08c9d3;" class="my-4">
            <div class="py-3">
                <div class="align-items-center p-0">
                    <h2 class="text-center text-white">Visitors</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($users as $user) : ?>
                <div class="col-sm-4 my-2">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-3" src="assets/users/<?php echo $user['image'] ?>" alt="" width="10px"/>
                            <div class="col-sm-6">
                                <h5 class="card-title"><?php echo $user['name'] ?></h5>
                                <h7 class="card-text"><?php echo $user['job'] ?></h7>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
        <!-- end Testimoni -->

        <!-- footer -->
        <div style="background-color: rgb(75, 75, 75);">
            <div class="container mt-5 py-4">
                <div class="row">
                    <div class="col-md-3"><h4 class="text-white">KETA TRAVEL</h4></div>
                    <div class="col-md-2">
                        
                    </div>
                    <div class="col-md-2">
                        <h4 class="text-white">Cabang Kami</h4>
                        <p class="text-white">Rusia</p>
                        <p class="text-white">Ukrainia</p>
                    </div>
                    <div class="col-md-2">
                        <h4 class="text-white">Dukungan</h4>
                        <p class="text-white">FAQ</p>
                        <p class="text-white">Customers Services</p>
                    </div>
                    <div class="col-md-2">
                        <h4 class="text-white">Perusahaan</h4>
                        <p class="text-white">Tentang kami</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>