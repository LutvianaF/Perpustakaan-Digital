<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="/assets/css/login.css">
</head>

<body>
    <div class="login-box">
        <div class="login-logo">
            <h3>
                REGISTRASI AKUN
            </h3>
        </div>
        <div class="login-box-body">
            <form action="#" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="nomor" placeholder="No HP" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="username" class="form-control" name="username" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Ulangi Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="button-login">
                    <button type="submit" class="btn btn-success btn-block btn-flat" name="btnLogin" title="Masuk Sistem">
                        <b>Registrasi</b>
                    </button>
                    <p>Sudah punya punya akun? <a href="login">Login Disini</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>