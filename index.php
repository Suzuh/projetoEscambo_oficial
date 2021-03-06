<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title> </title>
    <link rel="shortcut icon" type="image/x-icon" href="javascript:void(0)">

    <meta charset="utf-8">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="author" content="Caio Matheus dos Santos Abra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="public/css/index.css">

    <!-- boostrap -->
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap-utilities.rtl.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-5.0.0-beta/css/bootstrap.rtl.min.css">
    <!-- icons boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body id="index">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="public/img/logo_purple.png" alt="logo da escambo" width="220" height="80">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Gêneros</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lista de animes
                        </a>

                        <ul class="dropdown-menu text-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Legendado</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item disabled" href="#">Dublado</a></li>
                        </ul>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="temporada" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Temporadas
                        </a>

                        <ul class="dropdown-menu text-end" aria-labelledby="temporada">
                            <li><a class="dropdown-item" href="#">Atual</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Todas</a></li>
                        </ul>

                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <section class="banners">
            <div class="row">
            </div>
        </section>
    </div>

    <div class="container">
        <section class="divulge">
            <div class="row">
                <div class="col-12">
                    <div class="divulgação">
                        <p class="my-auto py-4">
                            ANUNCIE NA ESCAMBO
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="lançamentos mt-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="title-theme">
                        Lançamentos da temporada <span class="d-none d-md-inline typeWriter"><i class="bi bi-circle-fill ms-1"></i><i class="bi bi-circle-fill ms-1"></i><i class="bi bi-circle-fill ms-1"></i></span>
                    </h3>
                </div>
            </div>
        </section>
    </div>

   



    <script src="public/lib/jquery-3.5.1.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- <script src="public/lib/popper/popper.js"></script>  -->
    <script src="public/js/index.js"></script>
    <!-- boostrap -->
    <script src="public/lib/bootstrap-5.0.0-beta/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="public/lib/bootstrap-5.0.0-beta/js/bootstrap.esm.min.js"></script> -->
    <script src="public/lib/bootstrap-5.0.0-beta/js/bootstrap.min.js"></script>
</body>

</html>