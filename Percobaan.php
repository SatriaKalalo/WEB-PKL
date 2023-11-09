<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Percobaan.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <span></span>
        <span></span>
        <span></span>
        <form id="signinform">
            <h2>Login</h2>
            <div class="inputbox">
                <input type="text" placeholder="Username">
            </div>
            <div class="inputbox">
                <input type="password" placeholder="Password">
            </div>
            <div class="inputbox group">
                <a href="#">Lupa Password</a>
                <a href="#" id="signup">Sign Up</a>
            </div>
            <div class="inputbox">
                <input type="submit" value="Sign In">
            </div>
        </form>

        <form id="signupform">
            <h2>Registrasi</h2>
            <div class="inputbox">
                <input type="text" placeholder="Username">
            </div>
            <div class="inputbox">
                <input type="text" placeholder=" Alamat Email">
            </div>
            <div class="inputbox">
                <input type="password" placeholder=" Bikin Password">
            </div>
            <div class="inputbox">
                <input type="password" placeholder=" Konfirmasi Password">
            </div>
            <div class="inputbox">
                <input type="submit" value="Sign up">
            </div>
            <div class="inputbox group">
                <a href="#">Apakah Anda Punya Akun ?
                    <b id="signin">
                            Login
                    </b>
                </a>
            </div>
        </form>
    </div>
    <script>
        let signup = document.querySelector('#signup');
        let signin = document.querySelector('#signin');
        let body = document.querySelector('body');
        signup.onclick = function(){
          body.classList.add('signup');
        }
        signin.onclick = function(){
          body.classList.remove('signup');
        }
    </script>
</body>
</html>