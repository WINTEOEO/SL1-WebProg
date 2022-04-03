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
    .form-container{
        display: flex;
        justify-content: center;
        margin-top: 6rem;
    }
    .child-container{
        display: flex;
        justify-content: center;
        margin-top: 3rem;
        margin-left: 8rem;
    }
    .col-text, .col-input{
        margin-right: 0.5rem;
    }
    .row-1{
        margin-bottom: 3rem;
    }
    .row-input-1{
        margin-bottom: 2.4rem;
    }
    .col-input{
        margin-right: 3rem;
    }
    .col-text{
        font-size: 15px;
    }
    .row-2{
        margin-bottom: 5rem;
    }
    .row-input-2{
        margin-bottom: 4.3rem;
    }
    .row-file-upload{
        margin-bottom: 4.3rem;
        justify-self: space-evenly;
    }
    .row-3{
        margin-bottom: 2rem;
    }
    input{
        border: none;
        height: 25px;
    }
    .alamat-input-container{
        margin-bottom: 2rem;
    }
    .btn-container{
        display: flex;
        justify-content: right;
        margin-right: 10rem;
    }
    .back-btn{
        background-color: #ffb347;
        border: none;
        margin-right: 2rem;
    }
    .submit-btn{
        background-color: lightgreen;
    }
    .submit-btn, .back-btn{
        font-size: 25px;
        width: 150px;
        height: 35px;
        border-radius: 5px;
        border: 3px solid black;
    }
    .row-special{
        margin-bottom: 9.1rem;
    }
    .row-input-special{
        margin-bottom: 8.3rem;
    }
    input[type="date"]{
        width: 153px;
    }
</style>

</head>
<body>
    <div class="form-container">
        <form action="Proses-edit.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="child-container">
                    <div class="col-text">
                        <div class="row-1">Nama Depan</div>
                        <div class="row-1">Tempat Lahir</div>
                        <div class="row-1">Warga Negara</div>
                        <div class="row-2">Alamat</div>
                        <div class="row-3">Username</div>
                    </div>

                    <div class="col-input">
                        <div class="row-input-1">
                            <input type="text" name="NamaDepan" value="<?php echo $row['nama_depan']; ?>">
                        </div>
                        <div class="row-input-1">
                            <input type="text" name="TempatLahir" value="<?php echo $row['tempat_lahir']; ?>">
                        </div>
                        <div class="row-input-1">
                            <input type="text" name="warga-negara" value="<?php echo $row['warga_negara']; ?>">
                        </div>
                        <div class="alamat-input-container">
                            <input type="text" name="alamat" style="height: 60px;" value="<?php echo $row['alamat']; ?>">
                        </div>
                        <div class="row-3">
                            <input type="text" name="username" value="<?php echo $row['username']; ?>" readonly>
                        </div>
                    </div>

                    <div class="col-text">
                        <div class="row-1">Nama Tengah</div>
                        <div class="row-1">Tgl Lahir</div>
                        <div class="row-1">Email</div>
                        <div class="row-2">Kode Pos</div>
                        <div class="row-3">Password 1</div>
                    </div>

                    <div class="col-input">
                        <div class="row-input-1">
                            <input type="text" name="NamaTengah" value="<?php echo $row['nama_tengah']; ?>">
                        </div>
                        <div class="row-input-1">
                            <input type="date" name="Tgl_lhr" placeholder="dd/mm/yyyy" value="<?php echo $row['tanggal_lahir']; ?>">
                        </div>
                        <div class="row-input-1">
                            <input type="email" name="Email" value="<?php echo $row['email']; ?>">
                        </div>
                        <div class="row-input-2">
                            <input type="text" name="post-code" pattern="[0-9]{5}" value="<?php echo $row['kode_pos']; ?>">
                        </div>
                        <div class="row-3">
                            <input type="password" name="pass-1" value="<?php echo $row['password']; ?>">
                        </div>
                    </div>

                    <div class="col-text">
                        <div class="row-1">Nama Belakang</div>
                        <div class="row-1">NIK</div>
                        <div class="row-1">No HP</div>
                        <div class="row-2">Foto Profil</div>
                    </div>

                    <div class="col-input">
                        <div class="row-input-1">
                            <input type="text" name="NamaBelakang" value="<?php echo $row['nama_belakang']; ?>">
                        </div>
                        <div class="row-input-1">
                            <input type="text" name="NIK" pattern="[0-9]{11}" value="<?php echo $row['nik']; ?>">
                        </div>
                        <div class="row-input-1">
                            <input type="tel" name="phone" value="<?php echo $row['no.telp']; ?>">
                        </div>
                        <?php echo "<img src=".$foto." height=100 width=100 />" ?>
                        <div class="row-file-upload">        
                            <div><input type="file" name="berkas"/></div>
                        </div>
                    </div>
                </div>
                
                <div class="btn-container">
                    <a href="index.php"><button class="back-btn" type="button">Kembali</button></a>
                    
                    <input type="submit" name="Edit" value="Edit" action="Proses-edit.php" method="post" class="submit-btn">
                </div>
            </div>
        </form>
</body>
</html>