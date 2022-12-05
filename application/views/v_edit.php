<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>Perpustakaan | Edit Form</title>
</head>

<body>
    <div class="border border rounded my-5 mx-5 px-5">
        <div class="d-flex justify-content-between mt-5">
            <h4>Formulir Edit Form</h4>
            <a href="<?= base_url(). 'user'?>" class="btn btn-outline-danger">Back</a>
        </div>
        <hr class="mb-5">
        <?php 
        foreach ($buku as $u){
        ?>
        <form action="<?= base_url(). 'User/update/'. $u->id?>" method="post" class="mb-5">
            <h6>nama_lengkap</h6>
            <input type="text" name="nama_lengkap" placeholder="nama_lengkap" class="form-control mb-3"
                value="<?= $u->nama_lengkap?>">
            <h6>nis</h6>
            <input type="text" name="nis" placeholder="nis" class="form-control mb-3" value="<?= $u->nis?>">
            <h6>kelas</h6>
            <input type="text" name="kelas" placeholder="kelas" class="form-control mb-3" value="<?= $u->kelas?>">
            <h6>judul_buku</h6>
            <input type="text" name="judul_buku" placeholder="judul_buku" class="form-control mb-3"
                value="<?= $u->judul_buku?>">
            <h6>tgl_pinjam</h6>
            <input type="date" name="tgl_pinjam" placeholder="tgl_pinjam" class="form-control mb-3"
                value="<?= $u->tgl_pinjam?>">
            <h6>tgl_kembali</h6>
            <input type="date" name="tgl_kembali" placeholder="tgl_kembali" class="form-control mb-5"
                value="<?= $u->tgl_kembali?>">
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" value="Edit Form" class="btn btn-outline-primary">
            </div>
        </form>
        <?php } ?>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'>
    </script>
</body>

</html>