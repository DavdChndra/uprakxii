<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>Perpustakaan | Login</title>
</head>

<body>
    <div class="border border rounded my-5 mx-5 px-5">
        <?php
        if ($this->session->flashdata('error') !='') {
            echo '<div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">';
            echo $this->session->flashdata('error');
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
        ?>
        <?php
        if ($this->session->flashdata('success_register') !='') {
            echo '<div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">';
            echo $this->session->flashdata('success_register');
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
        ?>
        <h4 class="mt-5 mb-4">Login</h4>
        <hr class="mb-4">
        <form action="<?= base_url(). 'Login/proses'?>" method="post" class="mb-5">
            <h6>Username</h6>
            <input type="text" name="username" placeholder="username" class="form-control mb-3">
            <h6>password</h6>
            <input type="password" name="password" placeholder="password" class="form-control mb-3">
            <input type="submit" value="Login" class="btn btn-outline-primary mb-3">
            <h6>Belum punya akun? <a href="<?= base_url(). 'register'?>" class="text-decoration-none">Register</a></h6>
        </form>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'>
    </script>
</body>

</html>