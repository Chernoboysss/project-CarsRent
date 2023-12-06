<?php
include 'header.php';
?>

<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item btn"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Review</li>
                </ol>
                <h3>Review</h3>
            </nav>
        </div>
    </div>
</section>

<div class="col-lg-7 col-12 mt-3 d-flex align-items-stretch">
    <div class="contact-box w-100">
        <div class="form">
            <div class="row row-gap-3">

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
                //echo "Connected successfully";
    
                ?>
                <form action='review.php' method="post">
                <input type="text" name="nama" id="nama" > sementara isi pake id_user 
                <?php
                $a = 1;
                $sql = "SELECT mobil.nama as nama, tipe.nama as 'tipe', tipe.id_tipe as 'id_tipe', id FROM mobil
                INNER join tipe on tipe.id_tipe = mobil.id_tipe ORDER BY tipe.nama, mobil.nama";
                $mobil = $conn->query($sql);
                ?>
                <div class="col-12">
                    <label class="form-label">Model Mobil :</label>
                    <select name="mobil" id="mobil" class="form-control form-control-user">
                        <option value="">Pilih Model</option>
                        <?php foreach ($mobil as $m) { ?>
                            <option value="<?= $m['id']; ?>">
                                <?= $m['tipe']; ?> ->
                                <?= $m['nama']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <!-- 
                    <div class="col-12">
                    <label class="form-label">Jenis Mobil :</label><br>
                    <select name="color" id="color">
                        <option value=""> Pilih Jenis </option>
                        <option value="suv">SUV</option>
                        <option value="mpv">MPV</option>
                        <option value="hatchback">Hatchback</option>
                        <option value="sedan">Sedan</option>
                        <option value="pickup">Pickup</option>
                    </select>
                </div>
                            -->


                <div class="col-12">
                    <label class="form-label">Review :</label>
                    <textarea rows="5" class="form-control" name='review' id="review"></textarea>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" value="submit" class="form-control" id="form-submit" >Kirim Review</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<?php
include 'footer.php';
?>