
        <!-- awal content 1 -->
        
        <div class="mt-5 text-center" id="accreview">
            <div class="badge bg-success text-wrap mt-5 mb-3" style="width: 11rem;">
                <i class='bi bi-list-check fs-6'></i> <span class="fs-6">Acc review</span>
            </div>
        </div>
        <div class="table-responsive">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col-4">No</th>
                        <th scope="col-4">Username</th>
                        <th scope="col-4">Mobil</th>
                        <th scope="col-4">bintang</th>
                        <th scope="col-4">pesan review</th>
                        <th scope="col-4">keterangan</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $data = ["asep", "kijang", 5, "keren bangettt"];
                    for ($i = 1; $i <= 10; $i++) {

                    ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td scope="row"><?= $data[0] ?></td>
                            <td scope="row"><?= $data[1] ?></td>
                            <td scope="row"><img src="img/star<?= $data[2] ?>.png" alt="" style="width: 60px;"></td>
                            <td scope="row"><?= $data[3] ?></td>
                            <td scope="row">
                                <div class="gap-2">
                                    <!-- acc review -->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </button>
                                    <!-- delete review -->
                                    <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Kamu yakin akan menghapus ?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
<!-- akhir content1 -->