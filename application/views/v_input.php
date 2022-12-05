<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>Perpustakaan | Pinjam Buku</title>
</head>

<body>
    <div class="border border rounded my-5 mx-5 px-5">
        <div class="d-flex justify-content-between mt-5">
            <h4>Formulir Pinjam Buku</h4>
            <a href="<?= base_url(). 'user'?>" class="btn btn-outline-danger">Back</a>
        </div>
        <hr class="mb-5">
        <form action="<?= base_url(). 'User/insert'?>" method="post" class="mb-5">
            <h6>Nama Lengkap</h6>
            <input type="text" name="nama_lengkap" placeholder="nama_lengkap" class="form-control mb-3">
            <h6>Nis</h6>
            <input type="text" name="nis" placeholder="nis" class="form-control mb-3">
            <h6>Kelas</h6>
            <input type="text" name="kelas" placeholder="kelas" class="form-control mb-3">
            <h6>Judul Buku</h6>
            <input type="text" name="judul_buku" placeholder="judul_buku" class="form-control mb-3">
            <h6>Tanggal Pinjam</h6>
            <input type="date" name="tgl_pinjam" placeholder="tgl_pinjam" class="form-control mb-3">
            <h6>Tanggal Kembali</h6>
            <input type="date" name="tgl_kembali" placeholder="tgl_kembali" class="form-control mb-5">
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" value="Pinjam Buku" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'>
    </script>
</body>

</html>