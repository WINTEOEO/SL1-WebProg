<?php

    include("config.php");

    if(isset($_POST["Edit"])){

        $nama_file = $_FILES['berkas']['name'];

        $str_query = "update data_user set nama_depan ='".$_POST['NamaDepan']."', nama_tengah ='".$_POST['NamaTengah']."', nama_belakang ='".$_POST['NamaBelakang']."', tempat_lahir ='".$_POST['TempatLahir']."', tanggal_lahir ='".$_POST['Tgl_lhr']."', nik ='".$_POST['NIK']."', warga_negara ='".$_POST['warga-negara']."', email ='".$_POST['Email']."', no.telp ='".$_POST['phone']."', alamat ='".$_POST['alamat']."', kode_pos ='".$_POST['post-code']."', foto_profil ='".$nama_file."', password ='".$_POST['pass-1']."' where username = '".$_POST['username']."'";

        $query = mysqli_query($connection, $str_query);

        if($query){
            header("Location: profile.php");
            exit();
        } else {
            echo "Proses Edit Gagal".mysqli_error($connection);
        }
    }

?>