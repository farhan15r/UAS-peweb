<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.98.0">
        <title>Dashboard Template · Bootstrap v5.2</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style>

        <!-- Custom styles for this template -->
        <link href="/style/dashboard.css" rel="stylesheet">
    </head>

    <body>   
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">Keta Travel</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/admin">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/packages">
                        <span data-feather="shopping-cart" class="align-text-bottom"></span>
                        Packages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/customers">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                        Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="layers" class="align-text-bottom"></span>
                        Integrations
                        </a>
                    </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Year-end sale
                        </a>
                    </li>
                    </ul>
                </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="col-md-6 p-3">
                        <form method="POST" action="/admin/customers/add">
                        <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">UserName</label>
                                <input name="username" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input name="phone" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Job</label>
                                <input name="job" type="text" class="form-control">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="isinfluencer" type="checkbox" id="flexCheckChecked" value="1">
                                <label class="form-check-label">
                                    Influencer
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="/admin/customers" class="btn btn-outline-primary">Cancel</a>
                        </form>
                    </div>
                </main>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
        <script src="/script/dashboard.js"></script>
    </body>
</html>
