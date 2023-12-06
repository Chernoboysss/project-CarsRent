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
<div class="container">
    <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
        <h2>Review</h2>
    </div>
    <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
        <div class="row row-gap-3">
            <tbody>
                <section id="cars">
                    <div class="filter-wrap mt-4 d-flex flex-lg-row flex-column justify-content-lg-center row-gap-2 column-gap-3 mb-4"
                        data-aos="zoom-in" data-aos-duration="1000">
                        <span class="filter-btn filter-active" data-filter="*">All</span>
                        <?php

                        $sql = "SELECT nama as 'tipe' FROM tipe";

                        $tipe = $conn->query($sql);
                        foreach ($tipe as $t) { ?>
                            <span class="filter-btn" data-filter="filter-<?= $t['tipe']; ?>">
                                <?= $t['tipe']; ?>
                            </span>
                        <?php } ?>
                    </div>
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
                                        <img src="img/default.png" class="img-fluid rounded-start ms-4 pt-2" style="width: 50px;">
                                        <div>
                                            <h5 class="card-title  pt-2">
                                                <?= $r['username']; ?>
                                            </h5>
                                            <div class="position-relative">
                                                <img src="img/star<?= $r['rating']; ?>.png" class="img-fluid rounded-start position-absolute top-0 start-0" style="width: 50px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class=" col-12 mt-3">
                                            <div class="card-body">
                                                <i>
                                                    <p class="card-text mb-3 fs-4">
                                                        "
                                                        <?= $r['massage']; ?>"
                                                    </p>
                                                </i>
                                                <p class="card-text"><small class="text-muted">
                                                        <?= $r['nama']; ?>
                                                    </small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
            </tbody>
        </div>

    </div>
</div>
</div>
</div>
</section>
<?php
include 'footer.php';
?>

<!-- Bekasan
    <div
                                class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item filter-<?= $r['tipe']; ?> d-flex align-items-stretch mt-4">
                                <div class="cars-wrap justify-content-lg-stretch">
                                    <div class="cars-info justify-content-lg-stretch">
                                        <tr>
                                            <th scope="row">
                                                
                                            </th>
                                            <td>
                                                <h4>
                                                <?= $r['username']; ?>
                                                </h4>
                                            </td>
                                            <br>
                                            <td>
                                                <div class="cars-img">
                                                    <img src="img/cars/<?= $r['gambar']; ?>" alt="" class="img-fluid">
                                                </div>
                                                Mobil :
                                                <h6>
                                                    <?= $r['nama']; ?>
                                                </h6>
                                            </td>
                                            <br>
                                            <td>
                                                Review :
                                                <h6>
                                                    <?= $r['massage']; ?>
                                                </h6>
                                            </td>
                                            <br>
                                    </div>
                                </div>
                            </div>
                        -->

<!-- nitip bentar, nanti diambil lagi
                            <div class="col-container mt-5 cars-item filter-<?= $r['tipe']; ?>">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row row-gap-3 align-items-start mt-3">
                <div class="col-2">
                    <img src="img/default.png" class="img-fluid rounded-start ms-4" style="width: 50px;">
                </div>
                <div class="col-5 mt-3">
                    <h5 class="card-title">
                        <?= $r['username']; ?>
                    </h5>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <i>
                            <p class="card-text mb-3">
                                <?= $r['massage']; ?>
                            </p>
                        </i>

                        <div>
                            <img src="img/star<?= $r['rating']; ?>.png" class="img-fluid rounded-start" style="width: 150px;">
                        </div>

                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
<!-- star rating
    <span class="star-cb-group">
      <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
      <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4</label>
      <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
      <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
      <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
      <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0">0</label>
    </span>
    <div class="stars" id="stars">
                        
                        <input type="radio" name="rating" class="star" id="star1" value="1">
                        <label for="star1"></label>
                        <input type="radio" name="rating" class="star" id="star2" value="2">
                        <label for="star2"></label>
                        <input type="radio" name="rating" class="star" id="star3" value="3">
                        <label for="star3"></label>
                        <input type="radio" name="rating" class="star" id="star4" value="4">
                        <label for="star4"></label>
                        <input type="radio" name="rating" class="star" id="star5" value="5">
                        <label for="star5"></label>
                        <script src="main.js"></script>
                    </div>
-->