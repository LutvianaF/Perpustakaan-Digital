<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/login.css">
</head>

<body>
    <div class="login-box">
        <div class="login-logo">
            <img src="/assets/img/logo.jpg" alt="Logo">
            <h3>
                KASAGA PERPUSTAKAAN
            </h3>
            <p>Masuk ke Akun Anda</p>
        </div>
        <div class="login-box-body">
            <form action="#" method="post">
                <div class="form-group has-feedback">
                    <input type="username" class="form-control" name="username" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group pw has-feedback">
                    <input type="password" class="form-control" name="password" id="passwordKu" placeholder="Password" required>
                    <input type="checkbox" class="show-hide" onclick="showHide()">
                </div>
                <div class="button-login">
                    <button type="submit" name="btnLogin" title="Masuk Sistem">
                        <b>Login</b>
                    </button>
                    <p>Belum punya akun? <a href="register">Daftar Disini</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showHide() {
            var x = document.getElementById("passwordKu");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        // const passwordInput = document.getElementById('passwordKu');
        // const toggleIcon = document.querySelector('.show-hide i');
        // toggleIcon.addEventListener('click', () => {
        //     if (passwordInput.type === 'password') {
        //         passwordInput.type = 'text';
        //         toggleIcon.classList.remove('fa-eye');
        //         toggleIcon.classList.add('fa-eye-slash');
        //     } else {
        //         passwordInput.type = 'password';
        //         toggleIcon.classList.remove('fa-eye-slash');
        //         toggleIcon.classList.add('fa-eye');
        //     }
        // })
    </script>
</body>

</html>