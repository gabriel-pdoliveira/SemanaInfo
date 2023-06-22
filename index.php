<!DOCTYPE html>
<html lang="pt-br">
<?php include "config.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo URL ?>css/edicao1.css">
    <link rel="stylesheet" href="<?php echo URL ?>css/home.css" />
    <link rel="stylesheet" href="<?php echo URL ?>css/edicao2.css" />
    <link rel="stylesheet" href="<?php echo URL ?>css/edicao3.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Semana da Informática</title>
    <link rel=" icon" href="<?php echo URL ?>imgs/emblema_info.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php echo URL ?>imgs/logo_semanainfo.png" class="logo" alt="Semana da Informatica" width="30"
                    height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo URL ?>">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Edições
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo URL ?>2019">Edição 2019</a></li>
                            <li><a class="dropdown-item" href="<?php echo URL ?>2022">Edição 2022</a></li>
                            <li><a class="dropdown-item" href="<?php echo URL ?>2023">Edição 2023</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
    </nav>
    <?php
    if (isset($_GET['path'])) {
        $path = $_GET['path'];

        if ($path == '2019') {
            include './pages/edicao1.php';
        } elseif ($path == '2022') {
            include './pages/edicao2.php';
        } elseif ($path == '2023') {
            include './pages/edicao3.php';
        } else {
            include './pages/404.php';
        }
    } else {
        include './pages/home.php';
    }
    ?>

    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 left">
                    <img src="<?php echo URL ?>/imgs/logo_semanainfo.png" class="logo" alt="">
                    <h5>Escola Técnica Estadual Monteiro Lobato</h5>
                    <p>Curso Técnico de Informática</p>
                </div>
                <div class="col-md-4 right">
                    <h3>Contatos</h3>
                    <div class="redes">
                        <i class="ph ph-instagram-logo"></i>
                        <p>@info_Cimol</p>
                    </div>
                    <div class="redes">
                        <i class="ph ph-facebook-logo"></i>
                        <p>@info_Cimol</p>
                    </div>
                    <div class="redes">
                        <i class="ph ph-globe"></i>
                        <p>cimol.g12.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</html>