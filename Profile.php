<?php

    session_start();
    if(!$_SESSION['logged-in']){
        header("Location: index.php");
    }
    
    include("config.php");

    if(isset($_GET['username'])){
    
        $str_query = "select*from data_user where username ='".$_GET['username']."'"; 
        $query = mysqli_query($connection, $str_query);
        $row = mysqli_fetch_array($query);
    }

    $foto = $row['foto_profil'];

?>

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
    .edit-btn{
        display: flex;
        font-size: 50px;
        background-color: lightyellow;
        width: 100px;
        text-decoration: bold;
        margin-left: 5rem;
        justify-content: center;
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
            <div class="row"><b><?php echo $row['nama_depan'] ?></b></div>
            <div class="row"><b><?php echo $row['tempat_lahir'] ?></b></div>
            <div class="row"><b><?php echo $row['warga_negara'] ?></b></div>
            <div class="row"><b><?php echo $row['alamat'] ?></b></div>
        </div>

        <div class="col-text">
            <div class="row">Nama Tengah</div>
            <div class="row">Tgl Lahir</div>
            <div class="row">Email</div>
            <div class="row">Kode Pos</div>
        </div>

        <div class="col-text-variable">
            <div class="row"><b><?php echo $row['nama_tengah'] ?></b></div>
            <div class="row"><b><?php echo $row['tanggal_lahir'] ?></b></div>
            <div class="row"><b><?php echo $row['email'] ?></b></div>
            <div class="row"><b><?php echo $row['kode_pos'] ?></b></div>
        </div>

        <div class="col-text">
            <div class="row">Nama Belakang</div>
            <div class="row">NIK</div>
            <div class="row">No HP</div>
            <div class="row">Foto Profil</div>
        </div>

        <!-- <div class="col-text-variable">
            <?php

                $nama_belakang = $_SESSION['nama-belakang'];
                $NIK = $_SESSION['NIK'];
                $no_telp = $_SESSION['no-telp'];
                $img_path = $_SESSION['foto-profil'];

                echo "<b>$nama_belakang</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";
                echo "<b>$NIK</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";
                echo "<b>$no_telp</b>"; echo "<br/>"; echo "<br/>"; echo "<br/>";
                echo "<img src=".$img_path." height=100 width=100 />";

            ?>
        </div> -->

        <div class="col-text-variable">
            <div class="row"><b><?php echo $row['nama_belakang'] ?></b></div>
            <div class="row"><b><?php echo $row['nik'] ?></b></div>
            <div class="row"><b><?php echo $row['no.telp'] ?></b></div>
            <div class="row"><b><?php echo "<img src=".$foto." height=100 width=100 />" ?></b></div>
        </div>
    </div>

    <div class="edit-btn">
        <a href="Edit-profile.php?username=<?php echo $row['username'] ?>" style="text-decoration: none;">Edit</a>
    </div>
</body>
</html>
