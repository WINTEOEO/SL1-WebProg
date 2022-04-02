<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        font-family: Arial;
    }
    body{
        background-color: lightblue;
    }
    .text-regist{
        display: flex;
        justify-content: center;
        margin-top: 3rem;
        margin-bottom: 3 rem;
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

<body>
    <div class="text-regist">
        <h1>Register</h1>
    </div>

    <div class="form-container">
        <!-- <form action="Proses-upload.php" method="post" enctype="multipart/form-data">        
            <input type="file" name="berkas"/>
            <input type="submit" value="upload" name="upload">
        </form> -->

        <form action="Proses-regist.php" method="post" enctype="multipart/form-data">
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
                            <input type="text" name="NamaDepan" id="">
                        </div>
                        <div class="row-input-1">
                            <input type="text" name="TempatLahir" id="">
                        </div>
                        <div class="row-input-1">
                            <input type="text" name="warga-negara" id="">
                        </div>
                        <div class="alamat-input-container">
                            <input type="text" name="alamat" style="height: 60px;">
                        </div>
                        <div class="row-3">
                            <input type="text" name="username" id="">
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
                            <input type="text" name="NamaTengah" id="">
                        </div>
                        <div class="row-input-1">
                            <input type="date" name="Tgl_lhr" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="row-input-1">
                            <input type="email" name="Email" id="">
                        </div>
                        <div class="row-input-2">
                            <input type="text" name="post-code" pattern="[0-9]{5}">
                        </div>
                        <div class="row-3">
                            <input type="password" name="pass-1" id="">
                        </div>
                    </div>

                    <div class="col-text">
                        <div class="row-1">Nama Belakang</div>
                        <div class="row-1">NIK</div>
                        <div class="row-1">No HP</div>
                        <div class="row-2">Foto Profil</div>
                        <div class="row-3">Password 2</div>
                    </div>

                    <div class="col-input">
                        <div class="row-input-1">
                            <input type="text" name="NamaBelakang" id="">
                        </div>
                        <div class="row-input-1">
                            <input type="text" name="NIK" pattern="[0-9]{11}">
                        </div>
                        <div class="row-input-1">
                            <input type="tel" name="phone" id="">
                        </div>
                        <div class="row-file-upload">        
                            <div><input type="file" name="berkas"/></div>
                            <!-- <div><input type="submit" value="Upload" name="Upload"></div> -->
                        </div>
                        <div class="row-3">
                            <input type="password" name="pass-2" id="">
                        </div>
                    </div>
                </div>
                
                <div class="btn-container">
                    <a href="index.php"><button class="back-btn" type="button">Kembali</button></a>
                    
                    <input type="submit" name="Register" value="Register" action="Proses-regist.php" method="post" class="submit-btn">
                </div>
            </div>
        </form>

        <!-- <form action="Proses-upload.php" method="post" enctype="multipart/form-data">        
            <input type="file" name="berkas"/>
            <input type="submit" value="upload" name="upload">
        </form> -->
    </div>
</body>
</html>