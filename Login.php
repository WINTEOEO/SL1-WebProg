<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    * {
        font-family: Arial;
    }
    body{
        background-color: lightyellow;
    }
    h1{
        display:flex;
        justify-content: center;
        margin-bottom: 5rem;
        margin-top: 5rem;
    }
    .form-container{
        display: flex;
        justify-content: center;
    }
    .main{
        display: flex;
        justify-content: space-evenly;
    }
    .container{
        background-color: lightblue;
        width: 500px;
        height: 100%;
        padding: 1.5rem;
        font-size: 20px;
    }
    .submit-container{
        margin-top: 1rem;
        margin-right: 3.5rem;
        justify-content: right;
        display: flex;
    }
    .username-text{
        margin-bottom: 2rem;
    }
    .username-input{
        margin-bottom: 1.7rem;
    }
    .password-input{
        margin-bottom: 1rem;
    }
    input[type="text"], input[type="password"]{
        width: 200px;
        height: 25px;
        border: none;
    }
    input[type="submit"]{
        font-size: 18px;
        width: 100px;
        border: none;
    }
    input[type="submit"]{
        background-color: lightgreen;
        margin-right: 1rem;
    }
    a{
        background-color: #ffb347;
        color: black;
        text-decoration: none;
        font-size: 18px;
        width: 100px;
        text-align: center;
    }
</style>

</head>
<body>
    <div class="text-container"><h1>Login</h1></div>

    <div class="form-container">
        <div class="container">
            <form action="Proses-login.php" method="post">
                <div class="main">
                    <div class="lable-container">
                        <div class="username-text">Username</div>
                        <div class="password-text">Password</div>
                    </div>

                    <div class="input-container">
                        <div class="username-input"><input type="text" name="username" id=""></div>
                        <div class="password-input"><input type="password" name="password" id=""></div>
                    </div>
                </div>

                <div class="submit-container">
                    <input type="submit" name="Login" value="Login" action="Proses-login" method="post">
                    
                    <!-- <a href="index.php"><button class="back-btn">Kembali</button></a> -->
                    <a href="index.php">Kembali</a>
                </div>
            </form>

            <!-- <div class="submit-container">
                <input type="submit" name="Login" value="Login" action="Proses-login" method="post">

                <a href="index.php"><button class="back-btn">Kembali</button></a>
            </div> -->
        </div>
    </div>
</body>
</html>