<!-- dashboard -->

<div class="height-100 bg-light">
    <div class="container-fluid mt-5">

        <div class="row mt-5" id="dashboard">
            <div class="col-lg-12">
                <div class="card mb-3 text-white mt-5" style="background-color: #527853;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/profil/defaults.png')?>" class="card-img img-fluid ms-5" alt="..." style="width: 400px;">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body ">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">
                                    <h1 class="fs-1 mt-5 fw-bold">Admin</h1>

                                </div>
                                <p class="card-text fs-5">Nama lengkap admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- begin row -->
        <div class="mt-5 text-center">
            <div class="badge bg-success text-wrap mt-5 mb-3" style="width: 11rem;">
                <i class='bx bx-grid-alt nav_icon fs-6'></i> <span class="fs-6">Dashboard</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2 text-bg-dark">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah User</div>
                                <div class="h1 mb-0 font-weight-bold text-white">100</div>
                            </div>
                            <div class="col-auto">
                                <a href="#">
                                    <i class="fas fa-users fa-3x text-warning">
                                    </i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2 text-bg-dark">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">Total review</div>
                                <div class="h1 mb-0 font-weight-bold text-white">
                                    <?php
                                    $where = ['stok != 0'];
                                    $totalstok = 100;
                                    echo $totalstok;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="#"><i class="fas fa-book fa-3x text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 text-bg-dark">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">massage</div>
                                <div class="h1 mb-0 font-weight-bold text-white">
                                    <?php
                                    $where = ['dipinjam != 0'];
                                    $totaldipinjam = 120;
                                    echo $totaldipinjam;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="#"><i class="bi bi-chat-dots-fill fa-3x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2 text-bg-dark">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white text-uppercase mb-1">Total Mobil</div>
                                <div class="h1 mb-0 font-weight-bold text-white">
                                    <?php
                                    $where = ['dibooking !=0'];
                                    $totaldibooking = 900;
                                    echo $totaldibooking;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="#"><i class="bi bi-car-front-fill fa-3x text-danger"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir row -->
    <!-- gajadi di pake error mulu sidebarnya -->
    
    <!-- modal untuk isi massage yang panjang -->
    <!-- <div class="modal fade" id="lihatSelengkapnyaModal" tabindex="-1" aria-labelledby="lihatSelengkapnyaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lihatSelengkapnyaModalLabel">Selengkapnya</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quidem maxime veniam placeat dolorum incidunt sint molestias laboriosam totam doloribus ut soluta, unde culpa facere, adipisci eligendi, sunt ratione cupiditate reprehenderit odio! Facere molestias voluptas esse explicabo laborum fugiat aliquid, adipisci iste? Facere quas odit quia perspiciatis dolorem dignissimos fuga magnam vitae laboriosam iure at, dolor qui quam natus esse necessitatibus in eveniet, ipsa soluta quos. Obcaecati perferendis iure animi beatae consequatur cupiditate nulla ea? Hic error obcaecati vitae rem possimus pariatur, praesentium exercitationem corrupti iste voluptatum, quas laudantium inventore. Quod delectus ducimus quaerat iusto nobis explicabo iste quam quos?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
    </div> -->
    <!-- akhir modal -->