<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="style.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <title>KETA TRAVEL | ABOUT US</title>
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
                            <a class="nav-link" aria-current="page" href="/">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/packages">TOUR PACKAGE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/about">ABOUT US</a>
                        </li>
                    </ul>
                    <button class="btn btn-outline-light me-1">SIGN IN</button>
                    <button class="btn btn-outline-light">SIGN UP</button>
                </div>
            </div>
        </nav>
        <!-- end Navbar -->
        
        <!-- Container -->
        <div class="container mt-5 pt-5">
            <h2 class="text-center">KETA TRAVEL</h2>
            <div class="d-flex justify-content-center">
                <div class="col-md-9">
                    <p class="text-center">Keta Travel adalah agen perjalanan online dengan layanan lengkap yang berbasis di Jakarta yang menyediakan layanan manajemen perjalanan untuk rekreasi dan perusahaan. Perusahaan ini didirikan pada tahun 2022 oleh para ahli yang berpengalaman 
                        di bidang manajemen perjalanan dan pariwisata dalam memberikan kualitas layanan terbaik kepada pelanggan kami. Paket perjalanan Keta Travel terdiri dari beberapa layanan seperti Penerbangan, Hotel, Kapal pesiar, Transportasi darat dan Wisata. Terdapat banyak paket perjalanan menarik yang disediakan untuk pelanggan kami serta ditargetkan dan dirancang agar sesuai dengan semua Pasar dan budaya perjalanan, dan preferensinya.</p>
                </div>
            </div>
        </div>

        <div class="p-5 my-5" style="background-color: #08c9d3;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-center text-white">VISI</h2>
                        <p class="text-center text-white">Agen perjalanan online yang menjadi andalan pelanggan dalam memilih berpergian kemana saja, terutama Indonesia. Kenyamanan dan kepuasan pelanggan adalah prioritas utama kami sebagai penyedia layanan perjalanan</p>
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-center text-white">MISI</h2>
                        <p class="text-start text-white">1. Menjadi pilihan pertama bagi setiap pelanggan yang akan berpergian</p>
                        <p class="text-start text-white">2. Menarik pelanggan sebanyak mungkin dari berbagai penjuru negara dan mengubahnya menjadi pelanggan setia melalui berbagai layanan yang mengikuti standar kualitas tinggi</p>
                        <p class="text-start text-white">3. Mempertahankan pelanggan setia yang sudah ada dengan memberikan fasilitas khusus</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="text-center">Team Developer</h2>
            <div class="row justify-content-center">
                <?php foreach ($developers as $developer) : ?>
                <div class="col-xl-6 my-2">
                    <div class="card shadow p-2 my-3 bg-body rounded">
                        <div class="row card-body p-0">
                            <div class="col-sm-4">
                                <img class="rounded-circle m-1 img img-fluid" src="assets/developers/<?php echo $developer['image'] ?>" alt="sans" width="100%"/>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="card-title h3"><?php echo $developer['name'] ?></h2>
                                <h6 class="card-text"><?php echo $developer['position'] ?></h6>
                                <hr style="width:50%;text-align:left;margin-left:0">
                                <h6><?php echo $developer['nim'] ?></h6>
                                <br>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item border-0"><a class="btn btn-secondary" href=""><i class="bi bi-whatsapp secondary"></i></a></li>
                                    <li class="list-group-item border-0"><a class="btn btn-secondary" href=""><i class="bi bi-twitter"></i></a></li>
                                    <li class="list-group-item border-0"><a class="btn btn-secondary" href=""><i class="bi bi-instagram"></i></a></li>
                                    <li class="list-group-item border-0"><a class="btn btn-secondary" href=""><i class="bi bi-linkedin"></i></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>

        <!-- end Container -->

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
                        <a class="text-white active" href="about.html" style="text-decoration:none;">Tentang kami</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>