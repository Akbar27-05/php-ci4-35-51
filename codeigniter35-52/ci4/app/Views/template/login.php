<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <div class="col">
                    <?php
                    if (!empty($info)) {
                        echo '<div class="alert alert-danger p-2" role="alert">';
                        echo $info;
                        echo '</div>';
                    }
                    ?>
                </div>

                <span>
                    <h1>LOGIN ADMIN</h1>
                </span>
                <hr>
                <form action="<?= base_url('/admin/login') ?>" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" required>
                    </div>

                    <div class="form-label">
                        <input class="btn btn-primary" type="submit" value="simpan" name="LOGIN">
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>

</html>