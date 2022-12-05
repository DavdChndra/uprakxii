<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>Perpustakaan | Home</title>
</head>

<body>
    <div class="container">
        <h4 class="mt-5 mb-4">PERPUSTAKAAN | Selamat Datang, <span
                class="text-danger"><?= $this->session->userdata('username'); ?></span></h4>
        <div class="d-flex justify-content-between">
            <a href="<?= base_url(). 'User/input'?>" class="btn btn-outline-primary mb-4">Pinjam Buku</a>
            <a href="<?= base_url(). 'login/logout'?>" class="btn btn-outline-danger mb-4">logout</a>
        </div>

        <h5 class="mb-2">Daftar Pinjam Buku</h5>
        <hr class="w-25">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nis</th>
                    <th>Kelas</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php 
            $no = 1;
            foreach ($buku as $u){
            ?>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $u -> nama_lengkap; ?></td>
                    <td><?= $u -> nis; ?></td>
                    <td><?= $u -> kelas; ?></td>
                    <td><?= $u -> judul_buku; ?></td>
                    <td><?= $u -> tgl_pinjam; ?></td>
                    <td><?= $u -> tgl_kembali; ?></td>
                    <td>
                        <a href="<?= base_url().'User/edit/'. $u->id?>" class="btn btn-outline-primary">Edit</a>
                        <a href="<?= base_url().'User/delete/'. $u->id?>" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'>
    </script>
</body>

</html>