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
    body{background-color: lightblue;}
    h1{
        margin-top: 5rem;
        justify-content: center;
        display: flex;
    }
    p{
        margin-top: 5rem;
        justify-content: center;
        display: flex;
        font-size: 20px;
    }
    .button{
        background-color: lightyellow;
        width: 200px;
        font-size: 50px;
        border: none;
    }
    .btn-login{
        margin-top: 5rem;
        justify-content: center;
        display: flex;
    }
</style>

</head>
<body>  
    <?php

        session_start();

        // echo "halo";

        // $nama_file = $_FILES['berkas']['name'];
        // $tmp_name = $_FILES['berkas']['tmp_name'];
        
        // $allowed_ext = array("jpg", "jpeg", "png");
        // $extension = explode(".", $_FILES['berkas']['name']);
        // $accepted = false;

        // // echo is_bool($accepted);

        // if((($_FILES['berkas']['type'] == "image/jpg") || ($_FILES['berkas']['type'] == "image/jpeg") || ($_FILES['berkas']['type'] == "image/png")) && in_array($extension, $allowed_ext)) {
        //     echo is_bool($accepted);
        //     $destination = "terupload/";
        //     $terupload = move_uploaded_file($tmp_name, $destination.$nama_file);
        //     echo is_bool($accepted);
        //     $accepted = true;
        // } else {
        //     $accepted = false;
        //     // echo is_bool($accepted);
        // }

        // echo is_bool($accepted);

        if(isset($_POST['Register'])) {

            $nama_depan = $_POST['NamaDepan'];
            $nama_tengah = $_POST['NamaTengah'];
            $nama_belakang = $_POST['NamaBelakang'];
            $tpt_lahir = $_POST['TempatLahir'];
            $tgl_lahir = $_POST['Tgl_lhr'];
            $NIK = $_POST['NIK'];
            $warga_negara = $_POST['warga-negara'];
            $email = $_POST['Email'];
            $no_telp = $_POST['phone'];
            $alamat = $_POST['alamat'];
            $kode_pos = $_POST['post-code'];
            $username = $_POST['username'];
            $password_1 = $_POST['pass-1'];
            $password_2 = $_POST['pass-2'];

            if(($nama_depan && $nama_tengah && $nama_tengah && $tpt_lahir && $tgl_lahir && $NIK && $warga_negara && $email && $no_telp && $alamat && $kode_pos && $username && $password_1 && $password_2) && ($password_1 && $password_2)) {
                $_SESSION['nama-depan'] = $nama_depan;
                $_SESSION['nama-tengah'] = $nama_tengah;
                $_SESSION['nama-belakang'] = $nama_belakang;
                $_SESSION['tempat-lahir'] = $tpt_lahir;
                $_SESSION['tanggal-lahir'] = $tgl_lahir;
                $_SESSION['NIK'] = $NIK;
                $_SESSION['warga-negara'] = $warga_negara;
                $_SESSION['email'] = $email;
                $_SESSION['no-telp'] = $no_telp;
                $_SESSION['alamat'] = $alamat;
                $_SESSION['kode-pos'] = $kode_pos;
                $_SESSION['username-regis'] = $username;
                $_SESSION['password-1'] = $password_1;
                $_SESSION['password-2'] = $password_2;


                $nama_file = $_FILES['berkas']['name'];
                $tmp_name = $_FILES['berkas']['tmp_name'];
                
                $allowed_ext = array("jpg", "jpeg", "png");
                $extension = pathinfo($nama_file, PATHINFO_EXTENSION);

                // echo is_bool($accepted);

                if(in_array($extension, $allowed_ext)) {
                    $destination = "terupload/".$nama_file;
                    $terupload = move_uploaded_file($tmp_name, $destination);

                    $_SESSION['foto-profil'] = $destination;
                    // $_SESSION['foto-profil'] = $terupload;

                    echo "<h1>Selamat Registrasi anda telah berhasil</h1>"; 
                    echo "<br/>";
                    echo "<p>Hai!! $username, Silahkan kembali ke halaman welcome untuk melakukan login melalui tombol di bawah...</p>";
                }

                // echo "<h1>Selamat Registrasi anda telah berhasil</h1>"; 
                // echo "<br/>";
                // echo "<p>Hai!! $username, Silahkan kembali ke halaman welcome untuk melakukan login melalui tombol di bawah...</p>"; 
            } else{
                echo "<h1>Maaf, Registrasi anda belum berhasil...</h1>"; 
                echo "<br/>";
                echo "<p>Silahkan kembali untuk melakukan registrasi ulang</p>"; 
            }
        } else{
            echo "<h1>Maaf, Registrasi anda belum berhasil...</h1>"; 
            echo "<br/>";
            echo "<p>Silahkan kembali untuk melakukan registrasi ulang</p>";
        }

    ?>

    <div class="btn-login">
        <a href="index.php"><button class="button">Kembali</button></a>
    </div>
</body>
</html>

