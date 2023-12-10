<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('assets/img/carsrent.png') ?>">
    <title>CarsRent</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- BOX ICON -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- REMIX ICON -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- FONT AWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar" style="background-color: #527853;">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url('home') ?>">CarsRent</a>
            <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0  gap-2">
                    <li class="nav-item">
                        <a class="nav-link" data-filename="index.php" href="<?= base_url('home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-filename="about.php" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-filename="cars.php" href="<?= base_url('cars') ?>">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-filename="review.php" href="<?= base_url('review') ?>">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-filename="contact.php" href="<?= base_url('contact') ?>">Contact</a>
                    </li>
                    <li class="login ms-0 ms-lg-3">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Navbar -->
                        <!-- Dropdown - User Information -->
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class=" d-none d-lg-inline">username</span>
                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profil/defaults.png') ?>" style="width: 30px;">
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in mt-3">
                                        <li>
                                            <a class="dropdown-item text-gray small " href = <?= base_url('home') ?>> Home
                                                <i class="bi bi-house-door-fill text-gray"></i>
                                            </a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li>
                                            <a class="dropdown-item text-gray small " href="<?= base_url('profil')?>">My profile
                                                <i class="bi bi-person-fill text-gray"></i>
                                            </a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li>
                                            <a class="dropdown-item text-gray small " href="<?= base_url('autentifikasi/logout') ?>">Logout
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw text-gray"></i>
                                            </a>
                                        </li>
                                    </ul>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        function prepareReviewForm(mobilModal, id_modal) {
            // Set the value of the hidden input in the modal form
            document.getElementById('modalMobilInput').value = mobilModal;
            document.getElementById('modalidInput').value = id_modal;
        }
    </script>