<?php include "header.php"; ?>
<body>
<div class="container">
    <?php
    $id_user = $_POST['nama'] ?? null;
    $id_mobil = $_POST['id_modal'] ?? null;
    $review =  $_POST['review'] ?? null;
    $rating =  $_POST['rating'] ?? null;
    $submit = "INSERT INTO review (id_user,id,rating,massage)  VALUES ('$id_user','$id_mobil','$rating','$review')";
    mysqli_query($conn, $submit)

        ?>

    <a class="btn-hero" href="review.php">kembali</a>
</div>
</body>
<?php include "footer.php"; ?>