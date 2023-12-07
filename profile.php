
    <?php
    // connect ke database sementara
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_carsresent";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    include 'auth_header.php';
    ?>

    <div class="container mt-5">

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 justify-content-x">
                </div>
            </div>
            <div class="card mb-3 mt-5" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/defaults.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit.</h5>
                            <p class="card-text">Username</p>

                        </div>
                        <div class="btn btn-info ml-3 my-3 ms-3">
                            <!-- edit profile -->
                            <a href="" class="text-white bi bi-pencil-square link-offset-2 link-underline link-underline-opacity-0">Ubah Profil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    </div>




    <!-- isi review -->
    <div class="container">
        <h3 class="mt-5">Review dan ulasan anda</h3>
        <tbody>
            <section id="cars">
                <div class="row cars-container" data-aos="zoom-in" data-aos-duration="1000">
                    <?php
                    $sql = "SELECT tipe.nama as 'tipe', user.username as 'username', mobil.nama as 'nama', mobil.gambar as 'gambar', massage , rating
                    FROM review
                    INNER join user on user.id_user = review.id_user
                    INNER Join mobil on mobil.id = review.id
                    INNER Join tipe on tipe.id_tipe = mobil.id_tipe";

                    $review = $conn->query($sql);
                    $a = 1;
                    foreach ($review as $r) { ?>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-4 mt-4 cars-item filter-<?= $r['tipe']; ?> min-height: 540px">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="d-flex align-items-center mt-4">
                                    <img src="img/default.png" class="img-fluid rounded-start ms-4 pt-2" style="width: 30px;">
                                    <div>
                                        <p class="card-title  pt-2 fs-7">
                                            <?= $r['username']; ?>
                                        </p>
                                        <div class="position-relative">
                                            <img src="img/star<?= $r['rating']; ?>.png" class="img-fluid rounded-start position-absolute top-0 start-0" style="width: 50px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" col-12 mt-3">
                                        <div class="card-body">
                                            <i>
                                                <p class="card-text mb-3 fs-7">
                                                    "
                                                    <?= $r['massage']; ?>"
                                                </p>
                                            </i>
                                            <p class="card-text"><small class="text-muted">
                                                    <?= $r['nama']; ?>
                                                </small>
                                            </p>
                                            <div class="d-grid gap-2 d-md-block">
                                                <!-- hapus review -->
                                                <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Kamu yakin akan menghapus ?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                
                                                
                                                <!-- edit review -->
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
            </section>
        </tbody>
    </div>


    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit review</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label class="form-label">isi Review</label>
    <textarea rows="5" class="form-control" name='review' id="review" placeholder="">
        isinya review yang awal 
    </textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php
include 'footer.php' ;
?>