<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <section class="regis-login">
        <div class="container">
            <h3>LOGIN</h3>
            <div class="registrasi-login">
                <form action="index.php" method="post">
                    <label for="username">Username</label>
                    <br />
                    <input type="text" name="username" id="username">
                    <br />
                    <label for="password">Password</label>
                    <br />
                    <input type="password" name="password" id="password">
                    <br />
                    <label for="password2">Konfirmasi Password</label>
                    <br />
                    <input type="text" name="password2" id="password2">
                    <br />
                    <button type="submit" name="register" class="submit">Login!</button>
                    <div class="registrasi mb-3 mt-2">
                        <p>belum punya akun? <a href="registrasi.php" class="text-decoration-none">klik disini</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>