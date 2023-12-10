<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sidebar.css')?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- FONT AWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/boostrap/bootstrap.min.css"> -->
</head>

<body id="body-pd">
    <header class="header mb-5" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="">
            <div class="container mr-5">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class=" d-none d-lg-inline">username</span>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profil/defaults.png')?>" style="width: 30px;">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in mt-3">
                            <li>
                                <a class="dropdown-item text-gray small " href="<?= base_url('home') ?>">Home
                                    <i class="bi bi-house-door-fill text-gray"></i>
                                </a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                                <a class="dropdown-item text-gray small " href="#">My profile
                                    <i class="bi bi-person-fill text-gray"></i>
                                </a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                                <a class="dropdown-item text-gray small " href="#">Logout
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw text-gray"></i>
                                </a>
                            </li>
                        </ul>

            </div>

        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bi bi-car-front-fill nav_logo-icon'></i> <span class="nav_logo-name">CarsRent</span>
                </a>
                <div class="nav_list">
                    <a href="#dashboard" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="#accreview" class="nav_link"> <i class='bi bi-list-check'></i> <span class="nav_name">Acc review</span> </a>
                    <a href="#massage" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Massage</span> </a>
                    <a href="#tambahdata" class="nav_link"> <i class='bi bi-plus-square'></i> <span class="nav_name">Tambah data</span> </a>
                    <a href="#hapusdata" class="nav_link"> <i class='bi bi-trash'></i> <span class="nav_name">Hapus data</span> </a>
                </div>

            </div>
        </nav>
    </div>
    <!--Container Main start-->



    
    <!--Container Main end-->



    