<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
<style>
    * {
        font-family: Arial;
    }
    body {background-color: #C3C3C3;}
    h1 {
        justify-content: center; 
        display: flex; 
        margin-top: 5rem
    }
    h2 {
        justify-content: center; 
        display: flex; 
        margin-top: 5rem
    }
    .btn {
        display: flex; 
        justify-content: space-evenly;
        margin-top: 5rem;
    }
    .login_btn{
        background-color: lightblue;
        color: black;
        width: 250px;
        text-align: center;
        font-size: 50px;
        padding: 20px;
        border: none;
    }
    .regist_btn{
        background-color: #A0DAA9;
        color: black;
        width: 250px;
        text-align: center;
        font-size: 50px;
        padding: 20px;
        border: none;
    }
</style>
</head>
<body>
    <div class="text_web">
        <h2>Aplikasi Pengelolaan Keuangan</h2>
    </div>

    <div class="text_welcome">
        <h1>Selamat Datang di Aplikasi Pengelolaan Keuangan</h1>
    </div>

    <div class="btn">
        <a href="Login.php"><button class="login_btn">Login</button></a>
        <a href="Register.php"><button class="regist_btn">Register</button></a>
    </div>
</body>
</html>