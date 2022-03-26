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
        background-color: lightblue;
    }
    header{
        background-color: lightyellow;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 20px;
        width: 100%;
        height: 30px;
        left: 0; right:0; top: 0;
        position: fixed;
        padding-top: 1rem; padding-bottom: 1rem;
    }
    .header-left{
        padding-left: 1rem;
    }
    .logout-btn{
        padding-right: 1rem;
    }
    .header-right, .home-profile-btn{
        display: flex;
        justify-content: space-between;
    }
    .home-profile-btn{
        margin-right: 10rem;
    }
    .profile-btn{
        margin-left: 3rem;
    }
    a{
        color: black;
    }
    .profile-btn:hover, .logout-btn:hover{
        text-decoration: underline;
    }
    p{
        display: flex;
        justify-content: center;
        margin-top: 15rem;
        font-size: 25px;
        font-family: Arial; 
    }
</style>

</head>
<body>
    <header>
        <div class="header-left">
            Aplikasi Pengelolaan Keuangan
        </div>

        <div class="header-right">
            <div class="home-profile-btn">
                <div class="home-btn">
                    <a href="home.php">Home</a>
                </div>

                <div class="profile-btn">
                    <a href="profile.php" style="text-decoration: none;">Profile</a>
                </div>
            </div>

            <div class="logout-btn">
                <a href="logout.php" style="text-decoration: none;">Logout</a>
            </div>
        </div>
    </header>

    <?php

        session_start();

        $nama_depan = $_SESSION['nama-depan'];
        $nama_tengah = $_SESSION['nama-tengah'];
        $nama_belakang = $_SESSION['nama-belakang'];

        echo nl2br("<p>Halo&nbsp<b>$nama_depan $nama_tengah $nama_belakang</b>, Selamat datang di Aplikasi Pengelolaan Keuangan</p>");

    ?>

</body>
</html>