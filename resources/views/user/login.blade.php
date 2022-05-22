<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/user/login.css">
</head>

<body>
    <div class="container">
        <div class="container-left">
            <img src="assets/images/wlcome.svg" alt="welcome">
        </div>
        <div class="container-right">
            <h1>Login</h1>
            <form action="/login" method="post">
                @csrf
                <label for="">Username</label><br>
                <input type="text" name="username"><br>
                <label for="">Password</label><br>
                <input type="password" name="password"><br>
                <center><button type="submit">LOGIN</button></center>
            </form>
            <div class="reg">
                <h3>Belum Punya Akun?<li><a href="signup">Sign up</a></li>
                </h3><br>
            </div>
        </div>
    </div>
</body>

</html>
