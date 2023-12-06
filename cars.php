<?php
include 'header.php';
?>

<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">

            </nav>
        </div>
    </div>
</section>

<section id="cars">
    <div class="container">
        <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
            <h2>Cars</h2>
        </div>

        <div class="filter-wrap mt-4 d-flex flex-lg-row flex-column justify-content-lg-center row-gap-2 column-gap-3 mb-4" data-aos="zoom-in" data-aos-duration="1000">
            <span class="filter-btn filter-active" data-filter="*">All</span>
            <?php
            $a = 1;
            $sql = "SELECT nama as tipe FROM tipe";

            $tipe = $conn->query($sql);
            foreach ($tipe as $t) { ?>
                <span class="filter-btn" data-filter="filter-<?= $t['tipe']; ?>">
                    <?= $t['tipe']; ?>
                </span>
            <?php } ?>
        </div>

        <div class="row cars-container" data-aos="zoom-in" data-aos-duration="1000">
            <?php
            $a = 1;
            $sql = "SELECT tipe.nama as 'tipe', mobil.id as 'id', mobil.nama, transmisi, tahun, warna, kursi, harga, gambar FROM mobil
                    INNER Join tipe on tipe.id_tipe = mobil.id_tipe";
            $mobil = $conn->query($sql);

            foreach ($mobil as $r) { ?>

                <div
                    class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item filter-<?= $r['tipe']; ?> d-flex align-items-stretch mt-4">
                    <div class="cars-wrap">
                        <div class="cars-img">
                            <img src="img/cars/<?= $r['gambar']; ?>" alt="" class="img-fluid">
                        </div>
                        <hr>
                        <div class="cars-info">
                            <h4>
                                <?= $r['nama']; ?>
                            </h4>
                            <p>Transmisi :
                                <?= $r['transmisi']; ?>
                            </p>
                            <p>Tahun :
                                <?= $r['tahun']; ?>
                            </p>
                            <p>Kursi :
                                <?= $r['kursi']; ?> Seater
                            </p>
                            <p>Warna :
                                <?= $r['warna']; ?>
                            </p>
                            <hr>
                            <p class="fw-bold">Harga : Rp
                                <?= number_format($r['harga'], '0', '.'); ?>
                            </p>
                            <br>
                            <?php $mobilModal = $r['nama'];
                            $id_modal = $r['id'];
                            ?>

                            <button type="button" class="btn-hero" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="prepareReviewForm('<?= $mobilModal; ?>','<?= $id_modal; ?>')">
                                Tulis Review
                            </button>


                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<?php
include 'footer.php';
?>

<div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tulis Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action='reviewcontroller.php' method="post">
                    <label class="form-label">Username: sementara isi pake id_user</label><br>

                    <input type="text" class="form-control" name="nama" id="nama">


                    <label class="form-label">Model Mobil:</label>
                    <input type="text" class="form-control" name="mobil_modal" id="modalMobilInput" readonly>
                    <input type="hidden" class="form-control" name="id_modal" id="modalidInput">

                    <label class="form-label">Rating:</label><br>
                    <div class="rate">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
<br><br>
                    <label class="form-label">Review:</label>
                    <textarea rows="3" class="form-control" name='review' id="review" maxlength="128"></textarea>


                    <button type="submit" value="submit" class="form-control" id="form-submit">Kirim Review</button>

                </form>
            </div>
        </div>
    </div>
</div>
