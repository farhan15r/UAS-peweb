<?php
function rupiah($angka)
{
    $hasil = 'Rp ' . number_format($angka, 0, ",", ".");
    return $hasil;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>KETA TRAVEL | TOUR PACKAGE</title>
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
                        <a class="nav-link active" href="/packages">TOUR PACKAGE</a>
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
    <div class="container mt-5">
        <div class="py-3">
            <div class="align-items-center p-0">
                <h2 class="text-center">Find Package</h2>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-6" id="navbarSupportedContent">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Find package ..." aria-label="Search">
                    <button type="button" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- container -->
    <div class="container">
        <div class="row">
            <?php foreach ($packages as $package) : ?>
            <div class="col-md-6">
                <div class="card m-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assets/tour_packages/<?php echo $package['image'] ?>" alt="sans" width="100%">
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><h4><?php echo $package['title'] ?></h4></li>
                                    <li class="list-group-item"><?php echo $package['description'] ?></li>
                                    <li class="list-group-item"><?php echo rupiah($package['price']) ?></li>
                                    <li class="list-group-item"><button type="button" class="btn btn-outline-primary">Read More</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- end container -->

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


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>