<!-- content 3 start -->

<div class="mt-5 text-center" id="tambahdata">
        <div class="badge bg-success text-wrap mt-5 mb-3" style="width: 11rem;">
            <i class='bi bi-plus-square fs-6'></i> <span class="fs-6">Tambah Data</span>
        </div>
</div>
<div class="container">

    <div class="section-title mb-3">
        <h2 class="fw-bold text-center">INPUT DATA MOBIl</h2>
    </div>
    <div class="row align-items-center">
        <div class="col-12">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama mobil</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Mobil" required>
                </div>
                <div class="mb-3">
                        <label class="form-label">Tipe mobil</label>
                        <select class="form-control" id="tipe" required>
                            <option disabled selected>Pilih tipe mobil</option>
                            <option>tipe1</option>
                            <option>tipe2</option>
                            <option>tipe3</option>
                            <option>tipe4</option>
                            <option>tipe5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Transmisi mobil</label>
                        <select class="form-control" id="transimis" required>
                            <option disabled selected>Pilih transmisi mobil</option>
                            <option>Automatic</option>
                            <option>Manual</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <select class="form-control" id="transimis" required>
                            <option disabled selected>tahun</option>
                            <?php
                            $currentYear = date("Y");
                            // Looping dari tahun 1900 hingga tahun sekarang
                            for ($tahun = 1900; $tahun <= $currentYear; $tahun++) {
                                echo '<option>' . $tahun . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Warna</label>
                        <input type="text" class="form-control" placeholder="Masukan Warna" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kursi</label>
                        <input type="number" class="form-control" placeholder="Masukan kursi" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control" placeholder="Rp." value="Rp." required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload gambar mobil</label>
                        <input class="form-control" type="file" id="uploadGambarMobil" required>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="submit">submit</button>
                            <button class="btn btn-danger" type="reset">reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        


    </div>
<!-- content 3 akhir -->
