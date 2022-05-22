<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style/user/signup.css">
</head>

<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="/signup" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name</label><br>
                <input type="text" name="name" required><br>
            </div>
            <div class="form-group">
                <label for="">Username</label><br>
                <input type="text" name="username" required><br>
            </div>
            <div class="form-group">
                <label for="">Password</label><br>
                <input type="password" name="password" required><br>
            </div>
            <div class="form-group">
                <label for="">Konfirmasi Password</label><br>
                <input type="password" name="confirmPassword" required><br>
            </div>


            <div class="teks">
                <h1>Or</h1>
            </div>
            <div class="icons">

            </div>
            <button type="submit" class="registerbtn">submit</button>
        </form>
    </div>
</body>

</html>
