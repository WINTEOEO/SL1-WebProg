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
    .home-btn:hover, .logout-btn:hover{
        text-decoration: underline;
    }
    .text-profil{
        text-decoration: bold;
        font-size: 25px;
        display: flex;
        justify-content: center;
        margin-top: 7rem;
    }
    .container{
        display: flex;
        justify-content: center;
        margin-top: 5rem;
        font-size: 18px;
    }
    .col-text{
        margin-right: 2rem;
    }
    .row{
        margin-bottom: 2.8rem;
    }
    .col-text-variable{
        margin-right: 5rem;
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
                    <a href="home.php" style="text-decoration: none;">Home</a>
                </div>

                <div class="profile-btn">
                    <a href="profile.php">Profile</a>
                </div>
            </div>

            <div class="logout-btn">
                <a href="logout.php" style="text-decoration: none;">Logout</a>
            </div>
        </div>
    </header>

    <div class="text-profil"><b>Profil Pribadi</b></div>

    <div class="container">
        <div class="col-text">
            <div class="row">Nama Depan</div>
            <div class="row">Tempat Lahir</div>
            <div class="row">Warga Negara</div>
            <div class="row">Alamat</div>
        </div>

        <div class="col-text-variable">
            <?php
                SESSION_start();

                $nama_depan = $_SESSION['nama-depan'];
                $tpt_lahir = $_SESSION['tempat-lahir'];
                $warga_negara = $_SESSION['warga-negara'];
                $alamat = $_SESSION['alamat'];

                echo "<b>$nama_depan</b>"; echo "<br/>"; echo "<br/>";  echo "<br/>";
                echo "<b>$tpt_lahir</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";
                echo "<b>$warga_negara</b>"; echo "<br/>"; echo "<br/>";echo "<br/>";
                echo "<b>$alamat</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";

            ?>
        </div>

        <div class="col-text">
            <div class="row">Nama Tengah</div>
            <div class="row">Tgl Lahir</div>
            <div class="row">Email</div>
            <div class="row">Kode Pos</div>
        </div>

        <div class="col-text-variable">
            <?php

                $nama_tengah = $_SESSION['nama-tengah'];
                $tgl_lahir = $_SESSION['tanggal-lahir'];
                $email = $_SESSION['email'];
                $kode_pos = $_SESSION['kode-pos'];

                echo "<b>$nama_tengah</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";
                echo "<b>$tgl_lahir</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";
                echo "<b>$email</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";
                echo "<b>$kode_pos</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";

            ?>
        </div>

        <div class="col-text">
            <div class="row">Nama Belakang</div>
            <div class="row">NIK</div>
            <div class="row">No HP</div>
            <div class="row">Foto Profil</div>
        </div>

        <div class="col-text-variable">
            <?php

                $nama_belakang = $_SESSION['nama-belakang'];
                $NIK = $_SESSION['NIK'];
                $no_telp = $_SESSION['no-telp'];
                $img_path = $_SESSION['foto-profil'];

                echo "<b>$nama_belakang</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";
                echo "<b>$NIK</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";
                echo "<b>$no_telp</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";
                // if(move_uploaded_file($_FILES["file"]["tmp_name"], $img_path)) {
                    echo "<img src=".$img_path." height=100 width=100 />";
                // } else {
                //     echo "Error!!";
                // }

            ?>
        </div>
        <!-- <img src="<?php echo $_SESSION['foto-profil']; ?>"> -->
    </div>
</body>
</html>
