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
?>
<!-- halaman profil -->

<div class="container mt-5">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 justify-content-x mt-5">
                <div class="card card border-left-primary shadow h-100 py-2 " style="max-width: 600px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/profil/defaults.png')?> " class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit.</h5>
                                <p class="card-text">Username</p>

                            </div>
                            <div class="btn btn-info ml-3 my-3 ms-3">
                                <!-- edit profile -->
                                <a href="" class="text-white bi bi-pencil-square link-offset-2 link-underline link-underline-opacity-0" data-bs-toggle="modal" data-bs-target="#modalubahdata">Ubah Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 justify-content-x mt-5">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <h5 class="text-center">Total Review dan ulasan</h5>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mb-0 gap-2 ">
                            <span class="pt-3"><h1>10</h1></span>
                            <img src="<?= base_url('assets/img/star/star-enable.png') ?>" alt="star" style="width: 30px;" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
                                <div class="row">
                                    <div class=" col-12 mt-3">
                                        <div class="card-body">
                                            <i>
                                                <p class="card-text mb-1 fs-7 text-center">
                                                    " <?= $r['massage']; ?>"
                                                </p>
                                            </i>
                                            <img src="<?= base_url('assets/img/star/star').$r['rating'].'.png' ?>" class="img-fluid mx-auto d-block" style="width: 50px;">
                                            <p class="card-text text-center">
                                                <small class="text-muted">
                                                    review in <?= $r['nama']; ?>
                                                </small>
                                            </p>
                                            <div class="d-flex justify-content-center gap-2">
                                                <!-- hapus review -->
                                                <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Kamu yakin akan menghapus ?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>


                                                <!-- edit review -->
                                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
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


    <!-- modal ubah data profile -->
    <div class="modal fade" id="modalubahdata" tabindex="-1" aria-labelledby="modalubahdataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalubahdataLabel">Ubah profil</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- isi modal -->

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- form_open_multipart('user/ubahprofil') -->
                            <div class="form-group row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama" value="nama yang awal">
                                    <!-- form_error('nama', '<small class="text-danger pl-3">', '</small>');  -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" name="username" value="username yang awal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" value="email yang awal" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nohp" class="col-sm-3 col-form-label">No hp</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nohp" name="nohp" value="nohp yang awal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">Gambar</div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/img/profil/defaults.png') ?>" class="img-thumbnail" alt="">
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Pilih file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-12 d-flex justify-content-end gap-2">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                    <button class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close"> Kembali</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                    <!-- akhir isi -->
                </div>
            </div>
        </div>
    </div>



    <!-- Modal ubah review -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit review</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="form-label">isi Review</label>
                    <textarea rows="5" class="form-control" name='review' id="review" placeholder="" value="">review awal isinya yang awal</textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>            <!-- akhir isi -->
                </div>
            </div>
        </div>
    </div>



    <!-- Modal ubah review -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit review</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="form-label">isi Review</label>
                    <textarea rows="5" class="form-control" name='review' id="review" placeholder="" value="">review awal isinya yang awal</textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



